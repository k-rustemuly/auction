<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Status::exists()) {
            collect([
                ['code' => 'BID_SUBMISSION', 'name_kk' => 'Өтініштерді қабылдау', 'name_ru' => 'Прием заявок'],
                ['code' => 'ACTIVE', 'name_kk' => 'Аукционда', 'name_ru' => 'На торгах'],
                ['code' => 'CONSIDERATION', 'name_kk' => 'Аукционға рұқсат', 'name_ru' => 'Допуск на торги'],
                ['code' => 'AFTER_TRADE', 'name_kk' => 'Қорытындылау', 'name_ru' => 'Подведение итогов'],
                ['code' => 'COMPLETED', 'name_kk' => 'Сауда жүргізілді', 'name_ru' => 'Состоявшиеся торги'],
                ['code' => 'CANCELED', 'name_kk' => 'Аукционнан бас тартылды', 'name_ru' => 'Отмененные торги'],
                ['code' => 'NOT_COMPLETED', 'name_kk' => 'Сауда жүргізілмеді', 'name_ru' => 'Несостоявшиеся торги'],
            ])->each(fn($data) => Status::create($data));
        }
    }
}
