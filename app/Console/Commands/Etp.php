<?php

namespace App\Console\Commands;

use App\Models\Status;
use App\Models\Trade;
use App\Module\Etp\Dto\EtpTradeDto;
use App\Module\Etp\Services\EtpService;
use Illuminate\Console\Command;

class Etp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:etp {--fast : Не делать паузу между страницами}';
    protected $description = 'Синхронизация данных с etp.adilet.gov.kz';

    public function handle(EtpService $service)
    {
        $page = 1;
        $totalProcessed = 0;

        do {
            $this->info("Загрузка страницы $page...");
            $data = $service->fetchTrades($page);

            if ($data['items']->isEmpty()) {
                break;
            }

            foreach ($data['items'] as $dto) {
                /** @var EtpTradeDto $dto */

                if (Trade::where('uid', $dto->uid)->exists()) {
                    $this->warn("Запись {$dto->uid} уже существует. Синхронизация завершена.");
                    return self::SUCCESS;
                }

                $this->saveTrade($dto);
                $totalProcessed++;
            }

            $this->comment("Страница $page обработана. Всего новых: $totalProcessed из {$data['total']}");

            if (!$this->option('fast')) {
                sleep(10);
            }

            $page++;
            $hasMore = ($page - 1) * 20 < $data['total'];

        } while ($hasMore);

        return self::SUCCESS;
    }

    private function saveTrade(EtpTradeDto $dto): void
    {
        $statusId = null;
        if ($dto->statusCode) {
            $statusId = Status::firstOrCreate(
                ['code' => $dto->statusCode],
                ['name' => $dto->statusCode]
            )->id;
        }

        Trade::create(array_merge(
            $dto->toArray(),
            ['status_id' => $statusId]
        ));
    }
}
