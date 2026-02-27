<?php

namespace Database\Seeders;

use App\Models\Mark;
use Illuminate\Database\Seeder;

class MarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $marks =[
                [
                    'id' => 176,
                    'label' => 'Toyota',
                    'brandCountryId' => 12,
                    'synonyms' => [
                        'Тоиота',
                        'Тайота',
                        'Toyota',
                        'Тойота'
                    ],
                    'isPopular' => true,
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/176_toyota.png',
                    'urlAlias' => 'toyota',
                    'popular' => 31528
                ],
                [
                    'id' => 215,
                    'label' => 'ВАЗ (Lada)',
                    'brandCountryId' => 10,
                    'synonyms' => [
                        'Лада',
                        'Lada',
                        'ВАЗ (Lada)',
                        'ВАЗ'
                    ],
                    'isPopular' => true,
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/215_vaz.png',
                    'urlAlias' => 'vaz',
                    'popular' => 17290
                ],
                [
                    'id' => 79,
                    'label' => 'Hyundai',
                    'brandCountryId' => 9,
                    'synonyms' => [
                        'Хёнде',
                        'Хундай',
                        'Хунде',
                        'Huyndai',
                        'Hyundai',
                        'Хёндай'
                    ],
                    'isPopular' => true,
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/79_hyundai.png',
                    'urlAlias' => 'hyundai',
                    'popular' => 14257
                ],
                [
                    'id' => 116,
                    'label' => 'Mercedes-Benz',
                    'brandCountryId' => 2,
                    'synonyms' => [
                        'Mercedes-Benz',
                        'Мерседес Бенс'
                    ],
                    'isPopular' => true,
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/116_mercedes-benz.png',
                    'urlAlias' => 'mercedes-benz',
                    'popular' => 12008
                ],
                [
                    'id' => 92,
                    'label' => 'Kia',
                    'brandCountryId' => 9,
                    'synonyms' => [
                        'Kia',
                        'Киа'
                    ],
                    'isPopular' => true,
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/92_kia_new.png',
                    'urlAlias' => 'kia',
                    'popular' => 8946
                ],
                [
                    'id' => 184,
                    'label' => 'Volkswagen',
                    'brandCountryId' => 2,
                    'synonyms' => [
                        'Вольксваген',
                        'Фолксваген',
                        'VW',
                        'Volkswagen',
                        'Фольксваген'
                    ],
                    'isPopular' => true,
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/184_volkswagen.png',
                    'urlAlias' => 'volkswagen',
                    'popular' => 8697
                ],
                [
                    'id' => 18,
                    'label' => 'BMW',
                    'brandCountryId' => 2,
                    'synonyms' => [
                        'Бумер',
                        'беха',
                        'БЭХА',
                        'BMW',
                        'БМВ'
                    ],
                    'isPopular' => true,
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/18_bmw.png',
                    'urlAlias' => 'bmw',
                    'popular' => 7446
                ],
                [
                    'id' => 127,
                    'label' => 'Nissan',
                    'brandCountryId' => 12,
                    'synonyms' => [
                        'Nissan',
                        'Ниссан'
                    ],
                    'isPopular' => true,
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/127_nissan.png',
                    'urlAlias' => 'nissan',
                    'popular' => 7083
                ],
                [
                    'id' => 123,
                    'label' => 'Mitsubishi',
                    'brandCountryId' => 12,
                    'synonyms' => [
                        'Мицубиси',
                        'Мицубиши',
                        'Mitsubishi',
                        'Митсубиши'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/123_mitsubishi.png',
                    'urlAlias' => 'mitsubishi',
                    'popular' => 5944
                ],
                [
                    'id' => 10,
                    'label' => 'Audi',
                    'brandCountryId' => 2,
                    'synonyms' => [
                        'Audi',
                        'Ауди'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/10_audi.png',
                    'urlAlias' => 'audi',
                    'popular' => 5741
                ],
                [
                    'id' => 99,
                    'label' => 'Lexus',
                    'brandCountryId' => 12,
                    'synonyms' => [
                        'Lexus',
                        'Лексус'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/99_lexus.png',
                    'urlAlias' => 'lexus',
                    'popular' => 5564
                ],
                [
                    'id' => 35,
                    'label' => 'Chevrolet',
                    'brandCountryId' => 11,
                    'synonyms' => [
                        'Chevrolet',
                        'Шевроле'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/35_chevrolet.png',
                    'urlAlias' => 'chevrolet',
                    'popular' => 5423
                ],
                [
                    'id' => 216,
                    'label' => 'ГАЗ',
                    'brandCountryId' => 10,
                    'synonyms' => [
                        'ГАЗ'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/216_gaz.png',
                    'urlAlias' => 'gaz',
                    'popular' => 3674
                ],
                [
                    'id' => 166,
                    'label' => 'Subaru',
                    'brandCountryId' => 12,
                    'synonyms' => [
                        'Subaru',
                        'Субару'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/166_subaru.png',
                    'urlAlias' => 'subaru',
                    'popular' => 3432
                ],
                [
                    'id' => 42,
                    'label' => 'Daewoo',
                    'brandCountryId' => 9,
                    'synonyms' => [
                        'Даеву',
                        'Даэво',
                        'Дэву',
                        'Daewoo',
                        'Дэу'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/42_daewoo.png',
                    'urlAlias' => 'daewoo',
                    'popular' => 2976
                ],
                [
                    'id' => 130,
                    'label' => 'Opel',
                    'brandCountryId' => 2,
                    'synonyms' => [
                        'Opel',
                        'Опель'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/130_opel.png',
                    'urlAlias' => 'opel',
                    'popular' => 2667
                ],
                [
                    'id' => 113,
                    'label' => 'Mazda',
                    'brandCountryId' => 12,
                    'synonyms' => [
                        'Мацуда',
                        'Mazda',
                        'Мазда'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/113_mazda.png',
                    'urlAlias' => 'mazda',
                    'popular' => 2660
                ],
                [
                    'id' => 76,
                    'label' => 'Honda',
                    'brandCountryId' => 12,
                    'synonyms' => [
                        'Honda',
                        'Хонда'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/76_honda.png',
                    'urlAlias' => 'honda',
                    'popular' => 2569
                ],
                [
                    'id' => 32,
                    'label' => 'Changan',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Changan',
                        'Чанган'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/32_changan.png',
                    'urlAlias' => 'changan',
                    'popular' => 1861
                ],
                [
                    'id' => 147,
                    'label' => 'Renault',
                    'brandCountryId' => 5,
                    'synonyms' => [
                        'Ренаулт',
                        'Renault',
                        'Рено'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/147_renault.png',
                    'urlAlias' => 'renault',
                    'popular' => 1643
                ],
                [
                    'id' => 63,
                    'label' => 'Ford',
                    'brandCountryId' => 11,
                    'synonyms' => [
                        'Ford',
                        'Форд'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/63_ford.png',
                    'urlAlias' => 'ford',
                    'popular' => 1434
                ],
                [
                    'id' => 26,
                    'label' => 'BYD',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'BYD',
                        'БИД'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/26_byd.png',
                    'urlAlias' => 'byd',
                    'popular' => 1404
                ],
                [
                    'id' => 159,
                    'label' => 'Skoda',
                    'brandCountryId' => 6,
                    'synonyms' => [
                        'Скода',
                        'Skoda',
                        'Шкода'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/159_skoda_new.png',
                    'urlAlias' => 'skoda',
                    'popular' => 1155
                ],
                [
                    'id' => 97,
                    'label' => 'Land Rover',
                    'brandCountryId' => 1,
                    'synonyms' => [
                        'Ланд Ровер',
                        'ЛэндРовер',
                        'ЛендРовер',
                        'Рейндж',
                        'Ренж',
                        'Рэнж',
                        'Рэйндж',
                        'Land Rover',
                        'Ленд Ровер'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/97_land-rover.png',
                    'urlAlias' => 'land-rover',
                    'popular' => 1007
                ],
                [
                    'id' => 34,
                    'label' => 'Chery',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Chery',
                        'Чери'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/34_chery.png',
                    'urlAlias' => 'chery',
                    'popular' => 857
                ],
                [
                    'id' => 67,
                    'label' => 'Geely',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Жили',
                        'Geely',
                        'Джили'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/67_geely.png',
                    'urlAlias' => 'geely',
                    'popular' => 856
                ],
                [
                    'id' => 227,
                    'label' => 'УАЗ',
                    'brandCountryId' => 10,
                    'synonyms' => [
                        'УАЗ'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/227_uaz.png',
                    'urlAlias' => 'uaz',
                    'popular' => 778
                ],
                [
                    'id' => 87,
                    'label' => 'JAC',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'JAC',
                        'Джак'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/87_jac.png',
                    'urlAlias' => 'jac',
                    'popular' => 775
                ],
                [
                    'id' => 4233,
                    'label' => 'Li',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Li',
                        'Ли'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4233_li.png',
                    'urlAlias' => 'li',
                    'popular' => 761
                ],
                [
                    'id' => 80,
                    'label' => 'Infiniti',
                    'brandCountryId' => 12,
                    'synonyms' => [
                        'Infiniti',
                        'Инфинити'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/80_infiniti.png',
                    'urlAlias' => 'infiniti',
                    'popular' => 718
                ],
                [
                    'id' => 4472,
                    'label' => 'Deepal',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Deepal'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4472_deepal.png',
                    'urlAlias' => 'deepal',
                    'popular' => 698
                ],
                [
                    'id' => 139,
                    'label' => 'Porsche',
                    'brandCountryId' => 2,
                    'synonyms' => [
                        'Порш',
                        'Porsche',
                        'Порше'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/139_porsche.png',
                    'urlAlias' => 'porsche',
                    'popular' => 601
                ],
                [
                    'id' => 290,
                    'label' => 'Haval',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Хавал',
                        'Хэвал',
                        'Haval',
                        'Хавэйл'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/290_haval.png',
                    'urlAlias' => 'haval',
                    'popular' => 566
                ],
                [
                    'id' => 167,
                    'label' => 'Suzuki',
                    'brandCountryId' => 12,
                    'synonyms' => [
                        'Suzuki',
                        'Сузуки'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/167_suzuki.png',
                    'urlAlias' => 'suzuki',
                    'popular' => 509
                ],
                [
                    'id' => 4231,
                    'label' => 'Jetour',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Jetour',
                        'Жетоур'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4231_jetour.png',
                    'urlAlias' => 'jetour',
                    'popular' => 497
                ],
                [
                    'id' => 3689,
                    'label' => 'Ravon',
                    'brandCountryId' => 13,
                    'synonyms' => [
                        'Рэвон',
                        'Равон',
                        'Ravon',
                        'Рэйвон'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/3689_ravon.png',
                    'urlAlias' => 'ravon',
                    'popular' => 459
                ],
                [
                    'id' => 4239,
                    'label' => 'Zeekr',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Zeekr',
                        'Зикр'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4239_zeekr.png',
                    'urlAlias' => 'zeekr',
                    'popular' => 419
                ],
                [
                    'id' => 165,
                    'label' => 'SsangYong',
                    'brandCountryId' => 9,
                    'synonyms' => [
                        'СсангЙонг',
                        'СангЙонг',
                        'СангИонг',
                        'СсангИонг',
                        'SsangYong',
                        'Ссанг Йонг'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/165_ssang-yong.png',
                    'urlAlias' => 'ssang-yong',
                    'popular' => 418
                ],
                [
                    'id' => 4188,
                    'label' => 'GAC',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'GAC'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4188_gac.png',
                    'urlAlias' => 'gac',
                    'popular' => 355
                ],
                [
                    'id' => 135,
                    'label' => 'Peugeot',
                    'brandCountryId' => 5,
                    'synonyms' => [
                        'Peugeot',
                        'Пежо'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/135_peugeot.png',
                    'urlAlias' => 'peugeot',
                    'popular' => 353
                ],
                [
                    'id' => 89,
                    'label' => 'Jeep',
                    'brandCountryId' => 11,
                    'synonyms' => [
                        'Жып',
                        'Жип',
                        'Jeep',
                        'Джип'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/89_jeep.png',
                    'urlAlias' => 'jeep',
                    'popular' => 273
                ],
                [
                    'id' => 51,
                    'label' => 'Dodge',
                    'brandCountryId' => 11,
                    'synonyms' => [
                        'Dodge',
                        'Додж'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/51_dodge.png',
                    'urlAlias' => 'dodge',
                    'popular' => 271
                ],
                [
                    'id' => 101,
                    'label' => 'Lifan',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Lifan',
                        'Лифан'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/101_lifan.png',
                    'urlAlias' => 'lifan',
                    'popular' => 257
                ],
                [
                    'id' => 59,
                    'label' => 'FAW',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'FAW',
                        'ФАВ'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/59_faw.png',
                    'urlAlias' => 'faw',
                    'popular' => 253
                ],
                [
                    'id' => 217,
                    'label' => 'ЗАЗ',
                    'brandCountryId' => 13,
                    'synonyms' => [
                        'ЗАЗ'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/217_zaz.png',
                    'urlAlias' => 'zaz',
                    'popular' => 248
                ],
                [
                    'id' => 4229,
                    'label' => 'Hongqi',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Hongqi',
                        'Хончи'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4229_hongqi.png',
                    'urlAlias' => 'hongqi',
                    'popular' => 247
                ],
                [
                    'id' => 28,
                    'label' => 'Cadillac',
                    'brandCountryId' => 11,
                    'synonyms' => [
                        'Cadillac',
                        'Кадиллак'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/28_cadillac.png',
                    'urlAlias' => 'cadillac',
                    'popular' => 235
                ],
                [
                    'id' => 4225,
                    'label' => 'EXEED',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'EXEED',
                        'Эксид'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4225_exeed.png',
                    'urlAlias' => 'exeed',
                    'popular' => 224
                ],
                [
                    'id' => 4308,
                    'label' => 'OMODA',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'OMODA',
                        'ОМОДА'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4308_omoda.png',
                    'urlAlias' => 'omoda',
                    'popular' => 192
                ],
                [
                    'id' => 185,
                    'label' => 'Volvo',
                    'brandCountryId' => 7,
                    'synonyms' => [
                        'Волво',
                        'Volvo',
                        'Вольво'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/185_volvo_new.png',
                    'urlAlias' => 'volvo',
                    'popular' => 186
                ],
                [
                    'id' => 4380,
                    'label' => 'JINPENG',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'JINPENG'
                    ],
                    'urlAlias' => 'jipeng',
                    'popular' => 177
                ],
                [
                    'id' => 36,
                    'label' => 'Chrysler',
                    'brandCountryId' => 11,
                    'synonyms' => [
                        'Chrysler',
                        'Крайслер'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/36_chrysler.png',
                    'urlAlias' => 'chrysler',
                    'popular' => 177
                ],
                [
                    'id' => 4259,
                    'label' => 'Tank',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Tank',
                        'Танк'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4259_tank.png',
                    'urlAlias' => 'tank',
                    'popular' => 164
                ],
                [
                    'id' => 3815,
                    'label' => 'Genesis',
                    'brandCountryId' => 9,
                    'synonyms' => [
                        'Дженезис',
                        'Генесис',
                        'Genesis',
                        'Генезис'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/3815_genesis.png',
                    'urlAlias' => 'genesis',
                    'popular' => 149
                ],
                [
                    'id' => 172,
                    'label' => 'Tesla',
                    'brandCountryId' => 11,
                    'synonyms' => [
                        'Tesla',
                        'Тесла'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/172_tesla.png',
                    'urlAlias' => 'tesla',
                    'popular' => 147
                ],
                [
                    'id' => 4300,
                    'label' => 'Lynk & Co',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Lynk & Co',
                        'Линк и Ко'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4300_lynk_&_co.png',
                    'urlAlias' => 'lynk-and-co',
                    'popular' => 121
                ],
                [
                    'id' => 78,
                    'label' => 'Hummer',
                    'brandCountryId' => 11,
                    'synonyms' => [
                        'Hummer',
                        'Хаммер'
                    ],
                    'urlAlias' => 'hummer',
                    'popular' => 103
                ],
                [
                    'id' => 4488,
                    'label' => 'Rox',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Rox',
                        'Рокс'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4488_rox.png',
                    'urlAlias' => 'rox',
                    'popular' => 98
                ],
                [
                    'id' => 122,
                    'label' => 'Mini',
                    'brandCountryId' => 1,
                    'synonyms' => [
                        'Mini',
                        'Мини'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/122_mini.png',
                    'urlAlias' => 'mini',
                    'popular' => 92
                ],
                [
                    'id' => 37,
                    'label' => 'Citroen',
                    'brandCountryId' => 5,
                    'synonyms' => [
                        'Citroen',
                        'Ситроен'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/37_citroen_new.png',
                    'urlAlias' => 'citroen',
                    'popular' => 91
                ],
                [
                    'id' => 4348,
                    'label' => 'Jaecoo',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Jaecoo',
                        'Джейку'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4348_jaecoo.png',
                    'urlAlias' => 'jaecoo',
                    'popular' => 89
                ],
                [
                    'id' => 47,
                    'label' => 'Datsun',
                    'brandCountryId' => 12,
                    'synonyms' => [
                        'Datsun',
                        'Датсун'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/47_datsun.png',
                    'urlAlias' => 'datsun',
                    'popular' => 81
                ],
                [
                    'id' => 112,
                    'label' => 'Maybach',
                    'brandCountryId' => 2,
                    'synonyms' => [
                        'Мэйбах',
                        'Maybach',
                        'Майбах'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/112_maybach.png',
                    'urlAlias' => 'maybach',
                    'popular' => 80
                ],
                [
                    'id' => 88,
                    'label' => 'Jaguar',
                    'brandCountryId' => 1,
                    'synonyms' => [
                        'Джагуар',
                        'Jaguar',
                        'Ягуар'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/88_jaguar.png',
                    'urlAlias' => 'jaguar',
                    'popular' => 77
                ],
                [
                    'id' => 152,
                    'label' => 'Saab',
                    'brandCountryId' => 7,
                    'synonyms' => [
                        'Саб',
                        'Saab',
                        'Сааб'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/152_saab.png',
                    'urlAlias' => 'saab',
                    'popular' => 75
                ],
                [
                    'id' => 219,
                    'label' => 'ИЖ',
                    'brandCountryId' => 10,
                    'synonyms' => [
                        'ИЖ'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/219_izh.png',
                    'urlAlias' => 'ij',
                    'popular' => 70
                ],
                [
                    'id' => 71,
                    'label' => 'Great Wall',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Great Wall',
                        'Грейт Волл'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/71_great_wall.png',
                    'urlAlias' => 'great-wall',
                    'popular' => 69
                ],
                [
                    'id' => 119,
                    'label' => 'MG',
                    'brandCountryId' => 1,
                    'synonyms' => [
                        'MG',
                        'МГ'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/119_mg.png',
                    'urlAlias' => 'mg',
                    'popular' => 68
                ],
                [
                    'id' => 85,
                    'label' => 'Isuzu',
                    'brandCountryId' => 12,
                    'synonyms' => [
                        'Исузу',
                        'Isuzu',
                        'Исудзу'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/85_isuzu.png',
                    'urlAlias' => 'isuzu',
                    'popular' => 67
                ],
                [
                    'id' => 15,
                    'label' => 'Bentley',
                    'brandCountryId' => 1,
                    'synonyms' => [
                        'Bentley',
                        'Бентли'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/15_bentley.png',
                    'urlAlias' => 'bentley',
                    'popular' => 64
                ],
                [
                    'id' => 4522,
                    'label' => 'Geely Galaxy',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Джили Галакси',
                        'Geely Galaxy'
                    ],
                    'urlAlias' => 'geely-galaxy',
                    'popular' => 60
                ],
                [
                    'id' => 4265,
                    'label' => 'Voyah',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Voyah',
                        'Воя'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4265_voyah.png',
                    'urlAlias' => 'voyah',
                    'popular' => 57
                ],
                [
                    'id' => 3774,
                    'label' => 'Wuling',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Wuling',
                        'Вулинг'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/3774_wuling.png',
                    'urlAlias' => 'wuling',
                    'popular' => 54
                ],
                [
                    'id' => 4257,
                    'label' => 'Kaiyi',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Kaiyi',
                        'Кайи'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4257_kaiyi.png',
                    'urlAlias' => 'kaiyi',
                    'popular' => 53
                ],
                [
                    'id' => 52,
                    'label' => 'DongFeng',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'DongFeng',
                        'ДонгФенг'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/52_dongfeng.png',
                    'urlAlias' => 'dong-feng',
                    'popular' => 53
                ],
                [
                    'id' => 61,
                    'label' => 'Fiat',
                    'brandCountryId' => 3,
                    'synonyms' => [
                        'Fiat',
                        'Фиат'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/61_fiat_new.png',
                    'urlAlias' => 'fiat',
                    'popular' => 51
                ],
                [
                    'id' => 157,
                    'label' => 'SEAT',
                    'brandCountryId' => 4,
                    'synonyms' => [
                        'SEAT',
                        'Сеат'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/157_seat.png',
                    'urlAlias' => 'seat',
                    'popular' => 49
                ],
                [
                    'id' => 25,
                    'label' => 'Buick',
                    'brandCountryId' => 11,
                    'synonyms' => [
                        'Buick',
                        'Бьюик'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/25_buick.png',
                    'urlAlias' => 'buick',
                    'popular' => 43
                ],
                [
                    'id' => 148,
                    'label' => 'Renault Samsung',
                    'brandCountryId' => 9,
                    'synonyms' => [
                        'Renault Samsung',
                        'Рено Самсунг'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/148_renault-samsung.png',
                    'urlAlias' => 'samsung',
                    'popular' => 43
                ],
                [
                    'id' => 102,
                    'label' => 'Lincoln',
                    'brandCountryId' => 11,
                    'synonyms' => [
                        'Lincoln',
                        'Линкольн'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/102_lincoln.png',
                    'urlAlias' => 'lincoln',
                    'popular' => 43
                ],
                [
                    'id' => 56,
                    'label' => 'Eagle',
                    'brandCountryId' => 11,
                    'synonyms' => [
                        'Eagle',
                        'Игл'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/56_eagle.png',
                    'urlAlias' => 'eagle',
                    'popular' => 42
                ],
                [
                    'id' => 223,
                    'label' => 'Москвич',
                    'brandCountryId' => 10,
                    'synonyms' => [
                        'Москвич'
                    ],
                    'urlAlias' => 'moskvich',
                    'popular' => 42
                ],
                [
                    'id' => 4158,
                    'label' => 'Mercedes-Maybach',
                    'brandCountryId' => 2,
                    'synonyms' => [
                        'Mercedes-Maybach',
                        'Мерседес Майбах'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/112_maybach.png',
                    'urlAlias' => 'mercedes-maybach',
                    'popular' => 37
                ],
                [
                    'id' => 69,
                    'label' => 'GMC',
                    'brandCountryId' => 11,
                    'synonyms' => [
                        'ДжиЭмСИ',
                        'GMC',
                        'Джи Эм Си'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/69_gmc.png',
                    'urlAlias' => 'gmc',
                    'popular' => 36
                ],
                [
                    'id' => 2,
                    'label' => 'Acura',
                    'brandCountryId' => 12,
                    'synonyms' => [
                        'Acura',
                        'Акура'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/2_acura.png',
                    'urlAlias' => 'acura',
                    'popular' => 33
                ],
                [
                    'id' => 111,
                    'label' => 'Maserati',
                    'brandCountryId' => 3,
                    'synonyms' => [
                        'Масерати',
                        'Maserati',
                        'Мазерати'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/111_maserati.png',
                    'urlAlias' => 'maserati',
                    'popular' => 33
                ],
                [
                    'id' => 4275,
                    'label' => 'AITO',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'AITO',
                        'АЙТО'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4275_aito.png',
                    'urlAlias' => 'aito',
                    'popular' => 33
                ],
                [
                    'id' => 3822,
                    'label' => 'Ретро-автомобили',
                    'brandCountryId' => 13,
                    'synonyms' => [
                        'Ретро',
                        'Классика',
                        'Классические авто',
                        'Старые',
                        'Ретро-автомобили'
                    ],
                    'urlAlias' => 'retro-automobiles',
                    'popular' => 32
                ],
                [
                    'id' => 44,
                    'label' => 'Daihatsu',
                    'brandCountryId' => 12,
                    'synonyms' => [
                        'Daihatsu',
                        'Дайхатсу'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/44_daihatsu.png',
                    'urlAlias' => 'daihatsu',
                    'popular' => 32
                ],
                [
                    'id' => 24,
                    'label' => 'Bugatti',
                    'brandCountryId' => 3,
                    'synonyms' => [
                        'Bugatti',
                        'Бугатти'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/24_bugatti.png',
                    'urlAlias' => 'bugatti',
                    'popular' => 29
                ],
                [
                    'id' => 64,
                    'label' => 'Foton',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Foton',
                        'Фотон'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/64_foton.png',
                    'urlAlias' => 'foton',
                    'popular' => 27
                ],
                [
                    'id' => 4186,
                    'label' => 'BAIC',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'BAIC'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4186_baic.png',
                    'urlAlias' => 'baic',
                    'popular' => 24
                ],
                [
                    'id' => 138,
                    'label' => 'Pontiac',
                    'brandCountryId' => 11,
                    'synonyms' => [
                        'Pontiac',
                        'Понтиак'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/138_pontiac.png',
                    'urlAlias' => 'pontiac',
                    'popular' => 24
                ],
                [
                    'id' => 4484,
                    'label' => 'RAM',
                    'brandCountryId' => 11,
                    'synonyms' => [
                        'RAM'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4142_ram.png',
                    'urlAlias' => 'ram',
                    'popular' => 23
                ],
                [
                    'id' => 4396,
                    'label' => 'Zhiji',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Zhiji'
                    ],
                    'urlAlias' => 'zhiji',
                    'popular' => 22
                ],
                [
                    'id' => 4216,
                    'label' => 'Denza',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Denza',
                        'Дэнза'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4216_denza.png',
                    'urlAlias' => 'denza',
                    'popular' => 22
                ],
                [
                    'id' => 160,
                    'label' => 'Smart',
                    'brandCountryId' => 2,
                    'synonyms' => [
                        'Smart',
                        'Смарт'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/160_smart_new.png',
                    'urlAlias' => 'smart',
                    'popular' => 19
                ],
                [
                    'id' => 4416,
                    'label' => 'Xiaomi',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Xiaomi',
                        'Сяоми'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4416_xiaomi.png',
                    'urlAlias' => 'xiaomi',
                    'popular' => 18
                ],
                [
                    'id' => 4180,
                    'label' => 'ВИС',
                    'brandCountryId' => 10,
                    'synonyms' => [
                        'ВИС'
                    ],
                    'urlAlias' => 'vis',
                    'popular' => 17
                ],
                [
                    'id' => 72,
                    'label' => 'Hafei',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Hafei',
                        'Хафей'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/72_hafei.png',
                    'urlAlias' => 'hafei',
                    'popular' => 16
                ],
                [
                    'id' => 4237,
                    'label' => 'Leapmotor',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Leapmotor',
                        'Липvотор'
                    ],
                    'urlAlias' => 'leapmotor',
                    'popular' => 16
                ],
                [
                    'id' => 4279,
                    'label' => 'Avatr',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Avatr'
                    ],
                    'urlAlias' => 'avatr',
                    'popular' => 16
                ],
                [
                    'id' => 4344,
                    'label' => 'Wey',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Wey',
                        'Вей'
                    ],
                    'urlAlias' => 'wey',
                    'popular' => 15
                ],
                [
                    'id' => 222,
                    'label' => 'ЛуАЗ',
                    'brandCountryId' => 13,
                    'synonyms' => [
                        'ЛуАЗ',
                        'ЛУАЗ'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/222_luaz.png',
                    'urlAlias' => 'luaz',
                    'popular' => 15
                ],
                [
                    'id' => 4400,
                    'label' => 'Hozon',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Hozon',
                        'Хозон'
                    ],
                    'urlAlias' => 'hozon',
                    'popular' => 14
                ],
                [
                    'id' => 156,
                    'label' => 'Scion',
                    'brandCountryId' => 12,
                    'synonyms' => [
                        'Scion',
                        'Сцион'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/156_scion.png',
                    'urlAlias' => 'scion',
                    'popular' => 12
                ],
                [
                    'id' => 60,
                    'label' => 'Ferrari',
                    'brandCountryId' => 3,
                    'synonyms' => [
                        'Ферари',
                        'Ferrari',
                        'Феррари'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/60_ferrari.png',
                    'urlAlias' => 'ferrari',
                    'popular' => 11
                ],
                [
                    'id' => 4263,
                    'label' => 'DFSK',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'DFSK'
                    ],
                    'urlAlias' => 'dfsk',
                    'popular' => 10
                ],
                [
                    'id' => 95,
                    'label' => 'Lamborghini',
                    'brandCountryId' => 3,
                    'synonyms' => [
                        'Ламборджини',
                        'Lamborghini',
                        'Ламборгини'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/95_lamborghini.png',
                    'urlAlias' => 'lamborghini',
                    'popular' => 10
                ],
                [
                    'id' => 3,
                    'label' => 'Alfa Romeo',
                    'brandCountryId' => 3,
                    'synonyms' => [
                        'Alfa Romeo',
                        'Альфа Ромео'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/3_alfa-romeo.png',
                    'urlAlias' => 'alfa-romeo',
                    'popular' => 9
                ],
                [
                    'id' => 149,
                    'label' => 'Rolls-Royce',
                    'brandCountryId' => 1,
                    'synonyms' => [
                        'Ролс Ройс',
                        'Rolls-Royce',
                        'Роллс-Ройс'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/149_rolls-royce.png',
                    'urlAlias' => 'rolls-royce',
                    'popular' => 9
                ],
                [
                    'id' => 4368,
                    'label' => 'Polar Stone',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Polar Stone'
                    ],
                    'urlAlias' => 'polar-stone',
                    'popular' => 9
                ],
                [
                    'id' => 4316,
                    'label' => 'Baojun',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Baojun',
                        'Баоджун'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4316_baojun.png',
                    'urlAlias' => 'baojun',
                    'popular' => 8
                ],
                [
                    'id' => 4269,
                    'label' => 'HiPhi',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'HiPhi'
                    ],
                    'urlAlias' => 'hiphi',
                    'popular' => 8
                ],
                [
                    'id' => 91,
                    'label' => 'JMC',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'JMC',
                        'ДжейЭмСи'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/91_jmc.png',
                    'urlAlias' => 'jmc',
                    'popular' => 8
                ],
                [
                    'id' => 193,
                    'label' => 'ZX',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'ЗХ',
                        'ZX',
                        'ЗетИкс'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/193_zx.png',
                    'urlAlias' => 'zx',
                    'popular' => 7
                ],
                [
                    'id' => 4281,
                    'label' => 'Jetta',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Jetta',
                        'Джетта'
                    ],
                    'urlAlias' => 'jetta',
                    'popular' => 7
                ],
                [
                    'id' => 4196,
                    'label' => 'Proton',
                    'brandCountryId' => 13,
                    'synonyms' => [
                        'Proton',
                        'Протон'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4196_proton.png',
                    'urlAlias' => 'proton',
                    'popular' => 6
                ],
                [
                    'id' => 4468,
                    'label' => 'Shineray',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Shineray'
                    ],
                    'urlAlias' => 'shineray',
                    'popular' => 6
                ],
                [
                    'id' => 73,
                    'label' => 'Haima',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Haima',
                        'Хайма'
                    ],
                    'urlAlias' => 'haima',
                    'popular' => 6
                ],
                [
                    'id' => 4178,
                    'label' => 'BAW',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'BAW',
                        'БАВ'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4178_baw.png',
                    'urlAlias' => 'baw',
                    'popular' => 5
                ],
                [
                    'id' => 77,
                    'label' => 'HuangHai',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'HuangHai',
                        'ХуангХай'
                    ],
                    'urlAlias' => 'huanghai',
                    'popular' => 5
                ],
                [
                    'id' => 151,
                    'label' => 'Rover',
                    'brandCountryId' => 1,
                    'synonyms' => [
                        'Rover',
                        'Ровер'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/151_rover.png',
                    'urlAlias' => 'rover',
                    'popular' => 5
                ],
                [
                    'id' => 4273,
                    'label' => 'Maxus',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Maxus',
                        'Максус'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4273_maxus.png',
                    'urlAlias' => 'maxus',
                    'popular' => 5
                ],
                [
                    'id' => 83,
                    'label' => 'Iran Khodro',
                    'brandCountryId' => 13,
                    'synonyms' => [
                        'Iran Khodro',
                        'Иран Ходро'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/83_iran-khodro.png',
                    'urlAlias' => 'iran-khodro',
                    'popular' => 4
                ],
                [
                    'id' => 158,
                    'label' => 'ShuangHuan',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'ShuangHuan',
                        'ШуангХуан'
                    ],
                    'urlAlias' => 'shuanghuan',
                    'popular' => 4
                ],
                [
                    'id' => 4287,
                    'label' => 'Radar',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Radar',
                        'Радар'
                    ],
                    'urlAlias' => 'radar',
                    'popular' => 4
                ],
                [
                    'id' => 4200,
                    'label' => 'Xpeng',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Xpeng',
                        'Икспенг'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4200_xpeng.png',
                    'urlAlias' => 'xpeng',
                    'popular' => 4
                ],
                [
                    'id' => 4392,
                    'label' => 'Livan ',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Livan'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4392_livan.png',
                    'urlAlias' => 'livan',
                    'popular' => 4
                ],
                [
                    'id' => 192,
                    'label' => 'Zotye',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Zotye',
                        'Зоти'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/192_zotye.png',
                    'urlAlias' => 'zotye',
                    'popular' => 4
                ],
                [
                    'id' => 96,
                    'label' => 'Lancia',
                    'brandCountryId' => 3,
                    'synonyms' => [
                        'Лянчия',
                        'Lancia',
                        'Лянча'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/96_lancia.png',
                    'urlAlias' => 'lancia',
                    'popular' => 3
                ],
                [
                    'id' => 103,
                    'label' => 'Lotus',
                    'brandCountryId' => 1,
                    'synonyms' => [
                        'Lotus',
                        'Лотус'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/103_lotus.png',
                    'urlAlias' => 'lotus',
                    'popular' => 3
                ],
                [
                    'id' => 9,
                    'label' => 'Aston Martin',
                    'brandCountryId' => 1,
                    'synonyms' => [
                        'Aston Martin',
                        'Астон Мартин'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/9_aston-martin.png',
                    'urlAlias' => 'aston-martin',
                    'popular' => 3
                ],
                [
                    'id' => 4524,
                    'label' => 'Hengchi',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Hengchi'
                    ],
                    'urlAlias' => 'hengchi',
                    'popular' => 3
                ],
                [
                    'id' => 218,
                    'label' => 'ЗИЛ',
                    'brandCountryId' => 10,
                    'synonyms' => [
                        'ЗИЛ'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/218_zil.png',
                    'urlAlias' => 'zil',
                    'popular' => 3
                ],
                [
                    'id' => 4221,
                    'label' => 'Polestar',
                    'brandCountryId' => 7,
                    'synonyms' => [
                        'Polestar',
                        'Полестар'
                    ],
                    'urlAlias' => 'polestar',
                    'popular' => 3
                ],
                [
                    'id' => 4412,
                    'label' => 'SWM',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'SWM'
                    ],
                    'urlAlias' => 'swm',
                    'popular' => 3
                ],
                [
                    'id' => 4304,
                    'label' => 'Core Power',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Core Power'
                    ],
                    'urlAlias' => 'core-power',
                    'popular' => 3
                ],
                [
                    'id' => 4295,
                    'label' => 'Arcfox',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Arcfox',
                        'Аркфокс'
                    ],
                    'urlAlias' => 'arcfox',
                    'popular' => 3
                ],
                [
                    'id' => 4372,
                    'label' => 'Leopaard',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Leopaard',
                        'Леопард'
                    ],
                    'urlAlias' => 'leopaard',
                    'popular' => 3
                ],
                [
                    'id' => 4245,
                    'label' => 'Ora',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Ora',
                        'Ора'
                    ],
                    'urlAlias' => 'ora',
                    'popular' => 2
                ],
                [
                    'id' => 4340,
                    'label' => 'Evergrande',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Evergrande'
                    ],
                    'urlAlias' => 'evergrande',
                    'popular' => 2
                ],
                [
                    'id' => 4247,
                    'label' => 'Seres',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Seres',
                        'Сэрэс'
                    ],
                    'urlAlias' => 'seres',
                    'popular' => 2
                ],
                [
                    'id' => 105,
                    'label' => 'Luxgen',
                    'brandCountryId' => 13,
                    'synonyms' => [
                        'Luxgen',
                        'Люксген'
                    ],
                    'urlAlias' => 'luxgen',
                    'popular' => 2
                ],
                [
                    'id' => 4476,
                    'label' => 'Huawei',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Huawei'
                    ],
                    'urlAlias' => 'huawei',
                    'popular' => 2
                ],
                [
                    'id' => 4271,
                    'label' => 'Aro',
                    'brandCountryId' => 14,
                    'synonyms' => [
                        'Aro',
                        'Аро'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4271_aro.png',
                    'urlAlias' => 'aro',
                    'popular' => 2
                ],
                [
                    'id' => 4198,
                    'label' => 'Mahindra',
                    'brandCountryId' => 13,
                    'synonyms' => [
                        'Mahindra',
                        'Махиндра'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4198_mahindra.png',
                    'urlAlias' => 'mahindra',
                    'popular' => 2
                ],
                [
                    'id' => 33,
                    'label' => 'ChangFeng',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'ChangFeng',
                        'ЧангФэнг'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/33_changfeng.png',
                    'urlAlias' => 'changfeng',
                    'popular' => 2
                ],
                [
                    'id' => 155,
                    'label' => 'Saturn',
                    'brandCountryId' => 11,
                    'synonyms' => [
                        'Saturn',
                        'Сатурн'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/155_saturn.png',
                    'urlAlias' => 'saturn',
                    'popular' => 2
                ],
                [
                    'id' => 4285,
                    'label' => 'Farizon',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Farizon'
                    ],
                    'urlAlias' => 'farizon',
                    'popular' => 2
                ],
                [
                    'id' => 4508,
                    'label' => 'Jonway',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Jonway',
                        'Джонвэй'
                    ],
                    'urlAlias' => 'jonway',
                    'popular' => 2
                ],
                [
                    'id' => 4293,
                    'label' => 'IM',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'IM'
                    ],
                    'urlAlias' => 'im',
                    'popular' => 2
                ],
                [
                    'id' => 21,
                    'label' => 'Brilliance',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Brilliance',
                        'Бриллианс'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/21_brilliance.png',
                    'urlAlias' => 'brilliance',
                    'popular' => 2
                ],
                [
                    'id' => 4356,
                    'label' => 'KYC',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'KYC'
                    ],
                    'urlAlias' => 'kyc',
                    'popular' => 2
                ],
                [
                    'id' => 3762,
                    'label' => 'JinBei',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'JinBei',
                        'Джинбей'
                    ],
                    'urlAlias' => 'jin-bei',
                    'popular' => 2
                ],
                [
                    'id' => 4519,
                    'label' => 'Maextro',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Maextro',
                        'Маэкстро'
                    ],
                    'urlAlias' => 'maextro',
                    'popular' => 2
                ],
                [
                    'id' => 226,
                    'label' => 'ТагАЗ',
                    'brandCountryId' => 10,
                    'synonyms' => [
                        'ТагАЗ'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/226_tagaz.png',
                    'urlAlias' => 'tagaz',
                    'popular' => 2
                ],
                [
                    'id' => 117,
                    'label' => 'Mercury',
                    'brandCountryId' => 11,
                    'synonyms' => [
                        'Mercury',
                        'Меркури'
                    ],
                    'urlAlias' => 'mercury',
                    'popular' => 2
                ],
                [
                    'id' => 4420,
                    'label' => 'iCar',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'iCar',
                        'иКар'
                    ],
                    'urlAlias' => 'icar'
                ],
                [
                    'id' => 4360,
                    'label' => 'VGV',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'VGV'
                    ],
                    'urlAlias' => 'vgv'
                ],
                [
                    'id' => 4376,
                    'label' => 'Forthing',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Forthing',
                        'Форсинг'
                    ],
                    'urlAlias' => 'forthing'
                ],
                [
                    'id' => 4388,
                    'label' => 'Venucia',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Venucia'
                    ],
                    'urlAlias' => 'venucia'
                ],
                [
                    'id' => 4404,
                    'label' => 'SRM',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'SRM'
                    ],
                    'urlAlias' => 'srm'
                ],
                [
                    'id' => 4352,
                    'label' => 'Borgward',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Borgward'
                    ],
                    'urlAlias' => 'borgward'
                ],
                [
                    'id' => 4364,
                    'label' => 'NL',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'NL'
                    ],
                    'urlAlias' => 'nl'
                ],
                [
                    'id' => 4448,
                    'label' => 'Landian',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Landian',
                        'Ландиан'
                    ],
                    'urlAlias' => 'landian'
                ],
                [
                    'id' => 4428,
                    'label' => 'VinFast',
                    'brandCountryId' => 13,
                    'synonyms' => [
                        'VinFast'
                    ],
                    'urlAlias' => 'vinfast'
                ],
                [
                    'id' => 4521,
                    'label' => 'Hycan',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Hycan'
                    ],
                    'urlAlias' => 'hycan'
                ],
                [
                    'id' => 4520,
                    'label' => 'Hengrun',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Hengrun'
                    ],
                    'urlAlias' => 'hengrun'
                ],
                [
                    'id' => 4518,
                    'label' => 'Evolute',
                    'brandCountryId' => 10,
                    'synonyms' => [
                        'Evolute',
                        'Эволют'
                    ],
                    'urlAlias' => 'evolute'
                ],
                [
                    'id' => 4517,
                    'label' => 'Alpine',
                    'brandCountryId' => 5,
                    'synonyms' => [
                        'Alpine',
                        'Альпин'
                    ],
                    'urlAlias' => 'alpine'
                ],
                [
                    'id' => 4516,
                    'label' => 'KG Mobility',
                    'brandCountryId' => 9,
                    'synonyms' => [
                        'KG Mobility'
                    ],
                    'urlAlias' => 'kg-mobility'
                ],
                [
                    'id' => 4512,
                    'label' => 'Koenigsegg',
                    'brandCountryId' => 7,
                    'synonyms' => [
                        'Koenigsegg'
                    ],
                    'urlAlias' => 'koenigsegg'
                ],
                [
                    'id' => 4504,
                    'label' => 'Venturi',
                    'brandCountryId' => 5,
                    'synonyms' => [
                        'Venturi'
                    ],
                    'urlAlias' => 'venturi'
                ],
                [
                    'id' => 4500,
                    'label' => 'Yudo',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Yudo'
                    ],
                    'urlAlias' => 'yudo'
                ],
                [
                    'id' => 4424,
                    'label' => 'Jiyue',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Jiyue'
                    ],
                    'urlAlias' => 'jiyue'
                ],
                [
                    'id' => 4496,
                    'label' => 'Dadi',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Dadi'
                    ],
                    'urlAlias' => 'dadi'
                ],
                [
                    'id' => 40,
                    'label' => 'Dacia',
                    'brandCountryId' => 13,
                    'synonyms' => [
                        'Dacia',
                        'Дачия'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/40_dacia_new.png',
                    'urlAlias' => 'dacia'
                ],
                [
                    'id' => 4464,
                    'label' => 'Serpento',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Serpento'
                    ],
                    'urlAlias' => 'serpento'
                ],
                [
                    'id' => 4460,
                    'label' => 'Cupra',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Cupra',
                        'Купра'
                    ],
                    'urlAlias' => 'cupra'
                ],
                [
                    'id' => 4456,
                    'label' => 'Ineos',
                    'brandCountryId' => 1,
                    'synonyms' => [
                        'Ineos'
                    ],
                    'urlAlias' => 'ineos'
                ],
                [
                    'id' => 4452,
                    'label' => 'Niutron',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Niutron',
                        'Ниутрон'
                    ],
                    'urlAlias' => 'niutron'
                ],
                [
                    'id' => 4436,
                    'label' => 'Luxeed',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Luxeed',
                        'Люксид'
                    ],
                    'urlAlias' => 'luxeed'
                ],
                [
                    'id' => 4432,
                    'label' => 'Huansu',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Huansu',
                        'Хуансу'
                    ],
                    'urlAlias' => 'huansu'
                ],
                [
                    'id' => 4492,
                    'label' => 'Guojin',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Guojin'
                    ],
                    'urlAlias' => 'guojin'
                ],
                [
                    'id' => 4332,
                    'label' => 'Yema',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Yema'
                    ],
                    'urlAlias' => 'yema'
                ],
                [
                    'id' => 4291,
                    'label' => 'Vortex',
                    'brandCountryId' => 10,
                    'synonyms' => [
                        'Vortex'
                    ],
                    'urlAlias' => 'vortex'
                ],
                [
                    'id' => 4320,
                    'label' => 'Fisker',
                    'brandCountryId' => 14,
                    'synonyms' => [
                        'Fisker',
                        'Фискер'
                    ],
                    'urlAlias' => 'fisker'
                ],
                [
                    'id' => 4204,
                    'label' => 'Metrocab',
                    'brandCountryId' => 1,
                    'synonyms' => [
                        'Metrocab',
                        'Метрокаб'
                    ],
                    'urlAlias' => 'metrocab'
                ],
                [
                    'id' => 4202,
                    'label' => 'Hanteng',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Hanteng',
                        'Хантенг'
                    ],
                    'urlAlias' => 'hanteng'
                ],
                [
                    'id' => 4194,
                    'label' => 'Alga',
                    'brandCountryId' => 13,
                    'synonyms' => [
                        'Alga',
                        'Алга'
                    ],
                    'urlAlias' => 'alha'
                ],
                [
                    'id' => 4191,
                    'label' => 'Lucid',
                    'brandCountryId' => 11,
                    'synonyms' => [
                        'Lucid',
                        'Люсид'
                    ],
                    'urlAlias' => 'lucid'
                ],
                [
                    'id' => 4190,
                    'label' => 'Gonow',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Gonow'
                    ],
                    'urlAlias' => 'gonow'
                ],
                [
                    'id' => 4184,
                    'label' => 'Santana',
                    'brandCountryId' => 4,
                    'synonyms' => [
                        'Santana',
                        'Сантана'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4184_santana.png',
                    'urlAlias' => 'santana'
                ],
                [
                    'id' => 4182,
                    'label' => 'Derways',
                    'brandCountryId' => 10,
                    'synonyms' => [
                        'Derways',
                        'Дервэйс'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4182_derways.png',
                    'urlAlias' => 'derways'
                ],
                [
                    'id' => 4208,
                    'label' => 'Maple',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Maple',
                        'Мэйпл'
                    ],
                    'urlAlias' => 'maple'
                ],
                [
                    'id' => 4174,
                    'label' => 'РАФ',
                    'brandCountryId' => 13,
                    'synonyms' => [
                        'РАФ'
                    ],
                    'urlAlias' => 'raf'
                ],
                [
                    'id' => 4172,
                    'label' => 'ЕрАЗ',
                    'brandCountryId' => 13,
                    'synonyms' => [
                        'ЕрАЗ'
                    ],
                    'urlAlias' => 'eraz'
                ],
                [
                    'id' => 4160,
                    'label' => 'Puch',
                    'brandCountryId' => 13,
                    'synonyms' => [
                        'Puch',
                        'Пух'
                    ],
                    'urlAlias' => 'puch'
                ],
                [
                    'id' => 4144,
                    'label' => 'Aurus',
                    'brandCountryId' => 10,
                    'synonyms' => [
                        'Aurus',
                        'Аурус'
                    ],
                    'urlAlias' => 'aurus'
                ],
                [
                    'id' => 173,
                    'label' => 'Tianma',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Tianma',
                        'Тианма'
                    ],
                    'urlAlias' => 'tianma'
                ],
                [
                    'id' => 174,
                    'label' => 'Tianye',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Tianye',
                        'Тианье'
                    ],
                    'urlAlias' => 'tianye'
                ],
                [
                    'id' => 291,
                    'label' => 'Alpina',
                    'brandCountryId' => 2,
                    'synonyms' => [
                        'Alpina',
                        'Альпина'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/291_alpina.png',
                    'urlAlias' => 'alpina'
                ],
                [
                    'id' => 161,
                    'label' => 'Soueast',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Soueast',
                        'Суист'
                    ],
                    'urlAlias' => 'soueast'
                ],
                [
                    'id' => 4324,
                    'label' => 'Blaval',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Blaval',
                        'Блавал'
                    ],
                    'urlAlias' => 'blaval'
                ],
                [
                    'id' => 4210,
                    'label' => 'Weltmeister',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Weltmeister',
                        'Уэлтмейстер'
                    ],
                    'urlAlias' => 'weltmeister'
                ],
                [
                    'id' => 137,
                    'label' => 'Plymouth',
                    'brandCountryId' => 11,
                    'synonyms' => [
                        'Plymouth',
                        'Плимут'
                    ],
                    'urlAlias' => 'plymouth'
                ],
                [
                    'id' => 4297,
                    'label' => 'Changhe',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Changhe',
                        'Чанхе'
                    ],
                    'urlAlias' => 'changan'
                ],
                [
                    'id' => 190,
                    'label' => 'Xinkai',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Ксинкай',
                        'Хинкай',
                        'Xinkai',
                        'Ксин Кай'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/190_xin-kai.png',
                    'urlAlias' => 'xinkai'
                ],
                [
                    'id' => 4283,
                    'label' => 'Rivian',
                    'brandCountryId' => 11,
                    'synonyms' => [
                        'Rivian',
                        'Ривиан'
                    ],
                    'urlAlias' => 'rivian'
                ],
                [
                    'id' => 4277,
                    'label' => 'Bajaj',
                    'brandCountryId' => 13,
                    'synonyms' => [
                        'Bajaj'
                    ],
                    'urlAlias' => 'bajaj'
                ],
                [
                    'id' => 4267,
                    'label' => 'McLaren',
                    'brandCountryId' => 13,
                    'synonyms' => [
                        'McLaren',
                        'МакЛарен'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4267_mclaren.png',
                    'urlAlias' => 'mclaren'
                ],
                [
                    'id' => 4261,
                    'label' => 'Wanfeng',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Wanfeng',
                        'Уанфенг'
                    ],
                    'urlAlias' => 'wanfeng'
                ],
                [
                    'id' => 4255,
                    'label' => 'Karry',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Karry',
                        'Карри'
                    ],
                    'urlAlias' => 'karry'
                ],
                [
                    'id' => 4212,
                    'label' => 'Nio',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Nio',
                        'Нио'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4212_nio.png',
                    'urlAlias' => 'nio'
                ],
                [
                    'id' => 4243,
                    'label' => 'DS',
                    'brandCountryId' => 5,
                    'synonyms' => [
                        'DS',
                        'ДС'
                    ],
                    'icon' => 'https://kolesa.kz/static/frontend/images/app/v2/mark-logos/4243_ds.png',
                    'urlAlias' => 'ds'
                ],
                [
                    'id' => 4227,
                    'label' => 'Skywell',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Skywell',
                        'Скайуэл'
                    ],
                    'urlAlias' => 'skywell'
                ],
                [
                    'id' => 4223,
                    'label' => 'Sol',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Sol',
                        'Сол'
                    ],
                    'urlAlias' => 'sol'
                ],
                [
                    'id' => 4219,
                    'label' => 'Dayun',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Dayun',
                        'Даюн'
                    ],
                    'urlAlias' => 'dayun'
                ],
                [
                    'id' => 129,
                    'label' => 'Oldsmobile',
                    'brandCountryId' => 11,
                    'synonyms' => [
                        'Oldsmobile',
                        'Олдсмобиль'
                    ],
                    'urlAlias' => 'oldsmobile'
                ],
                [
                    'id' => 4217,
                    'label' => 'Hawtai',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Hawtai',
                        'Хаутай'
                    ],
                    'urlAlias' => 'hawtai'
                ],
                [
                    'id' => 4214,
                    'label' => 'Roewe',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Roewe',
                        'Роеу'
                    ],
                    'urlAlias' => 'roewe'
                ],
                [
                    'id' => 4241,
                    'label' => 'Enovate',
                    'brandCountryId' => 8,
                    'synonyms' => [
                        'Enovate',
                        'Эновейт'
                    ],
                    'urlAlias' => 'enovate'
                ],
                [
                    'id' => 4170,
                    'label' => 'СМЗ',
                    'brandCountryId' => 10,
                    'synonyms' => [
                        'СМЗ'
                    ],
                    'urlAlias' => 'smz'
                ]
        ];
        if (!Mark::exists()) {
            foreach ($marks as $mark) {
                Mark::create([
                    'kolesa_id' => $mark['id'],
                    'name' => $mark['label'],
                    'is_popular' => $mark['isPopular'] ?? false,
                ]);
            }
        }
    }
}
