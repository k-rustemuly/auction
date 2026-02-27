<?php

namespace App\Module\Etp\Services;

use App\Models\Category;
use App\Models\Region;
use App\Models\Status;
use App\Models\Trade;
use App\Module\Etp\Dto\EtpTradeDto;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EtpService
{

    private const BASE_HOST = 'https://etp.adilet.gov.kz';

    private const BASE_URL = '/trades.json';

    private const INFO_URL = '/trades/:uid/info';

    /**
     * @return array{total: int, items: Collection<EtpTradeDto>}
     */
    public function fetchTrades(int $page = 1, array $statuses = []): array
    {
        $skip = ($page - 1) * 20;

        $response = Http::get(self::BASE_HOST.self::BASE_URL, ['skip' => $skip, 'processStatuses' => [
            ...$statuses
        ]])->json('$top');

        $total = $response['trades']['total'] ?? 0;
        $items = collect($response['trades']['items'] ?? [])
            ->map(fn($item) => EtpTradeDto::fromArray($item));

        return [
            'total' => $total,
            'items' => $items
        ];
    }

    public function fetchTrade(Trade $trade)
    {
        $images = [];
        $data = Http::withHeader('X-Requested-With', 'XMLHttpRequest')
            ->get(self::BASE_HOST.(str_replace(':uid', $trade->uid, self::INFO_URL)))
            ->json('document');
        $fields = isset($data['fields']) ? $data['fields'] : [];
        if (!empty($fields)) {
            $trade->images = [];
            $trade->documents = [];
        }
        foreach ($fields as $field) {
            if ($field['name'] === 'classifiers') {
                $classifiers = $field['document']['fields'];
                foreach ($classifiers as $classifier) {
                    if ($classifier['name'] === 'procurementClassifier') {
                        $trade->category_id = Category::where('code', $classifier['value'][0])->first()?->id;
                    } elseif ($classifier['name'] === 'destinationRegion') {
                        $trade->region_id = Region::where('code', $classifier['value'][0])->first()?->id;
                    }
                }
            }else if ($field['name'] === 'documents') {
                $documets = $field['document']['fields'];
                foreach ($documets as $document) {
                    if ($document['name'] === 'attachments_other') {
                        $attachments = $document['value'];
                        foreach ($attachments as $attachment) {
                            $ext = strtolower(pathinfo($attachment['name'], PATHINFO_EXTENSION));
                            if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif'])) {
                                $images[] = $attachment['href'];
                            } else if(in_array($ext, ['pdf'])) {
                                $trade->documents = array_merge($trade->documents ?? [], [
                                    array('name' => $attachment['name'],
                                    'url' => $attachment['href'])
                                ]);
                            } else if(in_array($ext, ['doc']) && $attachment['name'] == 'Выписка из протокола итогов.doc') {
                                $trade->purchasePrice = getPurchasePrice(self::BASE_HOST.$attachment['href']);
                            }
                        }
                    }
                }
            } else if($field['name'] === 'lots') {
                $documents = $field['documents'];
                if(isset($documents[0])) {
                    $qfields = $documents[0]['fields'][0]['document']['fields'];
                    foreach($qfields as $qfield) {
                        if($qfield['name'] === 'attachments_other') {
                            $values = $qfield['value'];
                            if (!empty($values)) {
                                $trade->thumbnail = $values[0]['href'];
                            }
                        }
                    }
                }
                $trade->status_id = Status::where('code', $documents[0]['lot']['status']['name'])->first()?->id;
            }
        }
        $trade->images = $images;
        $trade->save();
    }

    public static function saveFiles(Trade $trade) {
        $trade->thumbnail = self::downloadAndSaveByUrl($trade->thumbnail, $trade->uid, $trade->registeredDate);
        if(!empty($trade->images)) {
            $localImages = [];
            foreach($trade->images as $image) {
                $localImages[] = self::downloadAndSaveByUrl($image, $trade->uid, $trade->registeredDate);
            }
            $trade->images = $localImages;
        }
        if(!empty($trade->documents) && $trade->status_id == Status::BID_SUBMISSION) {
            $localDocuments = [];
            foreach($trade->documents as $document) {
                $name = $document['name'];
                $url = $document['url'];
                $localDocuments[] = [
                    'name' => $name,
                    'url' => self::downloadAndSaveByUrl($url, $trade->uid, $trade->registeredDate)
                ];
            }
            $trade->documents = $localDocuments;
        }
        $trade->saveQuietly();
    }

    public static function downloadAndSaveByUrl(string $url, string $id, string $date): ?string
    {
        if (!$url) return null;
        $date = Carbon::parse($date)->format('Y-m-d');
        try {
            $response = Http::get(self::BASE_HOST.$url);

            if ($response->successful()) {
                $extension = pathinfo(parse_url($url, PHP_URL_PATH), PATHINFO_EXTENSION) ?: 'jpg';
                $fileName = 'trades/'.$date.'/'. $id.'/'. Str::random(20) . '.' . $extension;

                Storage::disk('public')->put($fileName, $response->body());

                return $fileName;
            }
        } catch (\Exception $e) {
            report($e);
        }

        return null;
    }
}
