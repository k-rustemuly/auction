<?php

namespace Database\Seeders;

use App\Models\CarModel;
use App\Models\Mark;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mark::whereDoesntHave('carModels')->each(function (Mark $mark) {
            $models = $this->getListOfModels($mark->kolesa_id);
            foreach ($models as $model) {
                CarModel::create([
                    'mark_id' => $mark->id,
                    'name' => $model['label'],
                    'is_popular' => $model['isPopular'] ?? false,
                ]);
            }
        });
    }

    private function getListOfModels($id): array
    {
        sleep(20);
        return Http::withHeaders(
            array(
                'Accept-Language' => 'ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7',
                'Referer' => 'https://kolesa.kz/',
                'app-language' => 'ru',
                'app-platform' => 'frontend',
                'Origin' => 'https://kolesa.kz',
                'Cookie' => 'kolesa_anonymous_id=72031f21-e254-49cb-8023-3eaf69fe2a52; dd__persistedKeys=[%22user.anonymousId%22]; dd_user.anonymousId=f0b1b6d0-91fc-11f0-897c-05d69a7443af; _ga_K434WRXPFF=GS2.1.s1771621289$o26$g1$t1771621874$j60$l0$h494070619; _ga=GA1.1.1026301325.1757917601; _ym_uid=164050933816362681; _ym_d=1757917603; _tt_enable_cookie=1; _ttp=01K560VS405Y5VJHENY1VY15X3_.tt.1; ttcsid_CBCFH3RC77U9CRRSGTL0=1771621291347::pCIr6iN9P3RlxUNk5SLh.22.1771621886681.1; ttcsid=1771621291348::UYLy1cHX7FYvm8FlhHpJ.22.1771621886681.0; ttcsid_CA5KN8JC77U5IG2U2J6G=1771621291349::UBC7IevmMA4mWph-Esc5.22.1771621886681.1; __gads=ID=dd5168569727aab5:T=1757917602:RT=1771621877:S=ALNI_MZrQM__ZbwZGCBDmqBMsltFE_Myyg; __gpi=UID=0000116441dfc52c:T=1757917602:RT=1771621877:S=ALNI_MbPkYXiI_1uGb0OtYVuYpeNCjCanw; __eoi=ID=a057f28ef0ab03c6:T=1757917602:RT=1771621877:S=AA-Afjbi0AOQsglA_w90Mh4L1MAA; _fbp=fb.1.1757917603509.744623296374184538; _gcl_au=1.1.673212912.1767804824; ksq_region_listKey=11; klssid=u2a0k8mr8vqgjk3iv8s2k57ukq; _ym_isad=2; kl_cdn_host=//atrkt-kz.kcdn.online',
                'Sec-Fetch-Dest' => 'empty',
                'Sec-Fetch-Mode' => 'cors',
                'Sec-Fetch-Site' => 'same-site',
                'Priority' => 'u=0',
                'TE' => 'trailers'
            )
        )
        ->get('https://app.kolesa.kz/v2/filter/models?markId=' . $id)
        ->json()
        ['items'];
    }
}
