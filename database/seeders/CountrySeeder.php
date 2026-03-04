<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use const Sunrise\Vin\REGIONS;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Country::exists()) {
            $countries = [];

            foreach(array_values(REGIONS) as $item) {
                $countries = array_merge($countries, array_values($item['countries']));
            }
            $countries = array_unique($countries);
            sort($countries);

            foreach($countries as $country) {
                Country::create([
                    'name_kk' => $country,
                    'name_ru' => $country,
                    'name_en' => $country,
                ]);
            }
        }
    }
}
