<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Color::exists()) {
            collect([
                ['name_kk' => 'Ақ', 'name_ru' => 'Белый'],
                ['name_kk' => 'Қара', 'name_ru' => 'Черный'],
                ['name_kk' => 'Күлгін', 'name_ru' => 'Серый'],
                ['name_kk' => 'Қызыл', 'name_ru' => 'Красный'],
                ['name_kk' => 'Көк', 'name_ru' => 'Синий'],
                ['name_kk' => 'Жасыл', 'name_ru' => 'Зеленый'],
                ['name_kk' => 'Сары', 'name_ru' => 'Желтый'],
                ['name_kk' => 'Қоңыр', 'name_ru' => 'Коричневый'],
                ['name_kk' => 'Қола', 'name_ru' => 'Бронзовый'],
                ['name_kk' => 'Күміс', 'name_ru' => 'Серебряный'],
                ['name_kk' => 'Алтын', 'name_ru' => 'Золотой'],
                ['name_kk' => 'Күміс сұр', 'name_ru' => 'Серебристый'],
                ['name_kk' => 'Қара сұр', 'name_ru' => 'Графитовый'],
                ['name_kk' => 'Ақ сұр', 'name_ru' => 'Серый металлик'],
                ['name_kk' => 'Қызғылт', 'name_ru' => 'Розовый'],
                ['name_kk' => 'Басқа', 'name_ru' => 'Другой'],
            ])->each(fn($data) => Color::create($data));
        }
    }
}
