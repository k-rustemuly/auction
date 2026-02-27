<?php

namespace Database\Seeders;

use App\Models\EngineType;
use Illuminate\Database\Seeder;

class EngineTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!EngineType::exists()) {
            collect([
                ['name_kk' => 'Бензин', 'name_ru' => 'Бензин'],
                ['name_kk' => 'Газ-бензин', 'name_ru' => 'Газ-бензин'],
                ['name_kk' => 'Дизель', 'name_ru' => 'Дизель'],
                ['name_kk' => 'Гибрид', 'name_ru' => 'Гибрид'],
                ['name_kk' => 'Электр қуаты', 'name_ru' => 'Электричество'],
            ])->each(function ($engineType) {
                EngineType::create($engineType);
            });
        }
    }
}
