<?php

namespace Database\Seeders;

use App\Models\TransmissonType;
use Illuminate\Database\Seeder;

class TransmissionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!TransmissonType::exists()) {
            collect([
                ['name_kk' => 'Автомат', 'name_ru' => 'Автомат'],
                ['name_kk' => 'Механика', 'name_ru' => 'Механика'],
            ])->each(function ($transmissionType) {
                TransmissonType::create($transmissionType);
            });
        }
    }
}
