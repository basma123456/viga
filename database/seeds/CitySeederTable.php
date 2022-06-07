<?php

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $cities = array (
            0 =>
                array (
                    'id' => '1',
                    'governorate_id' => '1',
                    'city_name_ar' => '15 مايو',
                    'city_name_en' => '15 May',
                ),
            1 =>
                array (
                    'id' => '2',
                    'governorate_id' => '1',
                    'city_name_ar' => 'الازبكية',
                    'city_name_en' => 'Al Azbakeyah',
                ),
            2 =>
                array (
                    'id' => '3',
                    'governorate_id' => '1',
                    'city_name_ar' => 'البساتين',
                    'city_name_en' => 'Al Basatin',
                ),
            3 =>
                array (
                    'id' => '4',
                    'governorate_id' => '1',
                    'city_name_ar' => 'التبين',
                    'city_name_en' => 'Tebin',
                ),
            4 =>
                array (
                    'id' => '5',
                    'governorate_id' => '1',
                    'city_name_ar' => 'الخليفة',
                    'city_name_en' => 'El-Khalifa',
                ),
            5 =>
                array (
                    'id' => '6',
                    'governorate_id' => '1',
                    'city_name_ar' => 'الدراسة',
                    'city_name_en' => 'El darrasa',
                ),
            6 =>
                array (
                    'id' => '7',
                    'governorate_id' => '1',
                    'city_name_ar' => 'الدرب الاحمر',
                    'city_name_en' => 'Aldarb Alahmar',
                ),
            7 =>
                array (
                    'id' => '8',
                    'governorate_id' => '1',
                    'city_name_ar' => 'الزاوية الحمراء',
                    'city_name_en' => 'Zawya al-Hamra',
                ),
            8 =>
                array (
                    'id' => '9',
                    'governorate_id' => '1',
                    'city_name_ar' => 'الزيتون',
                    'city_name_en' => 'El-Zaytoun',
                ),
            9 =>
                array (
                    'id' => '10',
                    'governorate_id' => '1',
                    'city_name_ar' => 'الساحل',
                    'city_name_en' => 'Sahel',
                ),
            10 =>
                array (
                    'id' => '11',
                    'governorate_id' => '1',
                    'city_name_ar' => 'السلام',
                    'city_name_en' => 'El Salam',
                ),
            11 =>
                array (
                    'id' => '12',
                    'governorate_id' => '1',
                    'city_name_ar' => 'السيدة زينب',
                    'city_name_en' => 'Sayeda Zeinab',
                ),
            12 =>
                array (
                    'id' => '13',
                    'governorate_id' => '1',
                    'city_name_ar' => 'الشرابية',
                    'city_name_en' => 'El Sharabeya',
                ),
            13 =>
                array (
                    'id' => '14',
                    'governorate_id' => '1',
                    'city_name_ar' => 'مدينة الشروق',
                    'city_name_en' => 'Shorouk',
                ),
            14 =>
                array (
                    'id' => '15',
                    'governorate_id' => '1',
                    'city_name_ar' => 'الظاهر',
                    'city_name_en' => 'El Daher',
                ),
            15 =>
                array (
                    'id' => '16',
                    'governorate_id' => '1',
                    'city_name_ar' => 'العتبة',
                    'city_name_en' => 'Ataba',
                ),
            16 =>
                array (
                    'id' => '17',
                    'governorate_id' => '1',
                    'city_name_ar' => 'القاهرة الجديدة',
                    'city_name_en' => 'New Cairo',
                ),
            17 =>
                array (
                    'id' => '18',
                    'governorate_id' => '1',
                    'city_name_ar' => 'المرج',
                    'city_name_en' => 'El Marg',
                ),
            18 =>
                array (
                    'id' => '19',
                    'governorate_id' => '1',
                    'city_name_ar' => 'عزبة النخل',
                    'city_name_en' => 'Ezbet el Nakhl',
                ),
            19 =>
                array (
                    'id' => '20',
                    'governorate_id' => '1',
                    'city_name_ar' => 'المطرية',
                    'city_name_en' => 'Matareya',
                ),
            20 =>
                array (
                    'id' => '21',
                    'governorate_id' => '1',
                    'city_name_ar' => 'المعادى',
                    'city_name_en' => 'Maadi',
                ),
            21 =>
                array (
                    'id' => '22',
                    'governorate_id' => '1',
                    'city_name_ar' => 'المعصرة',
                    'city_name_en' => 'Maasara',
                ),
            22 =>
                array (
                    'id' => '23',
                    'governorate_id' => '1',
                    'city_name_ar' => 'المقطم',
                    'city_name_en' => 'Mokattam',
                ),
            23 =>
                array (
                    'id' => '24',
                    'governorate_id' => '1',
                    'city_name_ar' => 'المنيل',
                    'city_name_en' => 'Manyal',
                ),
            24 =>
                array (
                    'id' => '25',
                    'governorate_id' => '1',
                    'city_name_ar' => 'الموسكى',
                    'city_name_en' => 'Mosky',
                ),
            25 =>
                array (
                    'id' => '26',
                    'governorate_id' => '1',
                    'city_name_ar' => 'النزهة',
                    'city_name_en' => 'Nozha',
                ),
            26 =>
                array (
                    'id' => '27',
                    'governorate_id' => '1',
                    'city_name_ar' => 'الوايلى',
                    'city_name_en' => 'Waily',
                ),
            27 =>
                array (
                    'id' => '28',
                    'governorate_id' => '1',
                    'city_name_ar' => 'باب الشعرية',
                    'city_name_en' => 'Bab al-Shereia',
                ),
            28 =>
                array (
                    'id' => '29',
                    'governorate_id' => '1',
                    'city_name_ar' => 'بولاق',
                    'city_name_en' => 'Bolaq',
                ),
            29 =>
                array (
                    'id' => '30',
                    'governorate_id' => '1',
                    'city_name_ar' => 'جاردن سيتى',
                    'city_name_en' => 'Garden City',
                ),
            30 =>
                array (
                    'id' => '31',
                    'governorate_id' => '1',
                    'city_name_ar' => 'حدائق القبة',
                    'city_name_en' => 'Hadayek El-Kobba',
                ),
            31 =>
                array (
                    'id' => '32',
                    'governorate_id' => '1',
                    'city_name_ar' => 'حلوان',
                    'city_name_en' => 'Helwan',
                ),
            32 =>
                array (
                    'id' => '33',
                    'governorate_id' => '1',
                    'city_name_ar' => 'دار السلام',
                    'city_name_en' => 'Dar Al Salam',
                ),
            33 =>
                array (
                    'id' => '34',
                    'governorate_id' => '1',
                    'city_name_ar' => 'شبرا',
                    'city_name_en' => 'Shubra',
                ),
            34 =>
                array (
                    'id' => '35',
                    'governorate_id' => '1',
                    'city_name_ar' => 'طره',
                    'city_name_en' => 'Tura',
                ),
            35 =>
                array (
                    'id' => '36',
                    'governorate_id' => '1',
                    'city_name_ar' => 'عابدين',
                    'city_name_en' => 'Abdeen',
                ),
            36 =>
                array (
                    'id' => '37',
                    'governorate_id' => '1',
                    'city_name_ar' => 'عباسية',
                    'city_name_en' => 'Abaseya',
                ),
            37 =>
                array (
                    'id' => '38',
                    'governorate_id' => '1',
                    'city_name_ar' => 'عين شمس',
                    'city_name_en' => 'Ain Shams',
                ),
            38 =>
                array (
                    'id' => '39',
                    'governorate_id' => '1',
                    'city_name_ar' => 'مدينة نصر',
                    'city_name_en' => 'Nasr City',
                ),
            39 =>
                array (
                    'id' => '40',
                    'governorate_id' => '1',
                    'city_name_ar' => 'مصر الجديدة',
                    'city_name_en' => 'New Heliopolis',
                ),
            40 =>
                array (
                    'id' => '41',
                    'governorate_id' => '1',
                    'city_name_ar' => 'مصر القديمة',
                    'city_name_en' => 'Masr Al Qadima',
                ),
            41 =>
                array (
                    'id' => '42',
                    'governorate_id' => '1',
                    'city_name_ar' => 'منشية ناصر',
                    'city_name_en' => 'Mansheya Nasir',
                ),
            42 =>
                array (
                    'id' => '43',
                    'governorate_id' => '1',
                    'city_name_ar' => 'مدينة بدر',
                    'city_name_en' => 'Badr City',
                ),
            43 =>
                array (
                    'id' => '44',
                    'governorate_id' => '1',
                    'city_name_ar' => 'مدينة العبور',
                    'city_name_en' => 'Obour City',
                ),
            44 =>
                array (
                    'id' => '45',
                    'governorate_id' => '1',
                    'city_name_ar' => 'وسط البلد',
                    'city_name_en' => 'Cairo Downtown',
                ),
            45 =>
                array (
                    'id' => '46',
                    'governorate_id' => '1',
                    'city_name_ar' => 'الزمالك',
                    'city_name_en' => 'Zamalek',
                ),
            46 =>
                array (
                    'id' => '47',
                    'governorate_id' => '1',
                    'city_name_ar' => 'قصر النيل',
                    'city_name_en' => 'Kasr El Nile',
                ),
            47 =>
                array (
                    'id' => '48',
                    'governorate_id' => '1',
                    'city_name_ar' => 'الرحاب',
                    'city_name_en' => 'Rehab',
                ),
            48 =>
                array (
                    'id' => '49',
                    'governorate_id' => '1',
                    'city_name_ar' => 'القطامية',
                    'city_name_en' => 'Katameya',
                ),
            49 =>
                array (
                    'id' => '50',
                    'governorate_id' => '1',
                    'city_name_ar' => 'مدينتي',
                    'city_name_en' => 'Madinty',
                ),
            50 =>
                array (
                    'id' => '51',
                    'governorate_id' => '1',
                    'city_name_ar' => 'روض الفرج',
                    'city_name_en' => 'Rod Alfarag',
                ),
            51 =>
                array (
                    'id' => '52',
                    'governorate_id' => '1',
                    'city_name_ar' => 'شيراتون',
                    'city_name_en' => 'Sheraton',
                ),
            52 =>
                array (
                    'id' => '53',
                    'governorate_id' => '1',
                    'city_name_ar' => 'الجمالية',
                    'city_name_en' => 'El-Gamaleya',
                ),
            53 =>
                array (
                    'id' => '54',
                    'governorate_id' => '1',
                    'city_name_ar' => 'العاشر من رمضان',
                    'city_name_en' => '10th of Ramadan City',
                ),
            54 =>
                array (
                    'id' => '55',
                    'governorate_id' => '1',
                    'city_name_ar' => 'الحلمية',
                    'city_name_en' => 'Helmeyat Alzaytoun',
                ),
            55 =>
                array (
                    'id' => '56',
                    'governorate_id' => '1',
                    'city_name_ar' => 'النزهة الجديدة',
                    'city_name_en' => 'New Nozha',
                ),
            56 =>
                array (
                    'id' => '57',
                    'governorate_id' => '1',
                    'city_name_ar' => 'العاصمة الإدارية',
                    'city_name_en' => 'Capital New',
                ),
            57 =>
                array (
                    'id' => '58',
                    'governorate_id' => '2',
                    'city_name_ar' => 'الجيزة',
                    'city_name_en' => 'Giza',
                ),
            58 =>
                array (
                    'id' => '59',
                    'governorate_id' => '2',
                    'city_name_ar' => 'السادس من أكتوبر',
                    'city_name_en' => 'Sixth of October',
                ),
            59 =>
                array (
                    'id' => '60',
                    'governorate_id' => '2',
                    'city_name_ar' => 'الشيخ زايد',
                    'city_name_en' => 'Cheikh Zayed',
                ),
            60 =>
                array (
                    'id' => '61',
                    'governorate_id' => '2',
                    'city_name_ar' => 'الحوامدية',
                    'city_name_en' => 'Hawamdiyah',
                ),
            61 =>
                array (
                    'id' => '62',
                    'governorate_id' => '2',
                    'city_name_ar' => 'البدرشين',
                    'city_name_en' => 'Al Badrasheen',
                ),
            62 =>
                array (
                    'id' => '63',
                    'governorate_id' => '2',
                    'city_name_ar' => 'الصف',
                    'city_name_en' => 'Saf',
                ),
            63 =>
                array (
                    'id' => '64',
                    'governorate_id' => '2',
                    'city_name_ar' => 'أطفيح',
                    'city_name_en' => 'Atfih',
                ),
            64 =>
                array (
                    'id' => '65',
                    'governorate_id' => '2',
                    'city_name_ar' => 'العياط',
                    'city_name_en' => 'Al Ayat',
                ),
            65 =>
                array (
                    'id' => '66',
                    'governorate_id' => '2',
                    'city_name_ar' => 'الباويطي',
                    'city_name_en' => 'Al-Bawaiti',
                ),
            66 =>
                array (
                    'id' => '67',
                    'governorate_id' => '2',
                    'city_name_ar' => 'منشأة القناطر',
                    'city_name_en' => 'ManshiyetAl Qanater',
                ),
            67 =>
                array (
                    'id' => '68',
                    'governorate_id' => '2',
                    'city_name_ar' => 'أوسيم',
                    'city_name_en' => 'Oaseem',
                ),
            68 =>
                array (
                    'id' => '69',
                    'governorate_id' => '2',
                    'city_name_ar' => 'كرداسة',
                    'city_name_en' => 'Kerdasa',
                ),
            69 =>
                array (
                    'id' => '70',
                    'governorate_id' => '2',
                    'city_name_ar' => 'أبو النمرس',
                    'city_name_en' => 'Abu Nomros',
                ),
            70 =>
                array (
                    'id' => '71',
                    'governorate_id' => '2',
                    'city_name_ar' => 'كفر غطاطي',
                    'city_name_en' => 'Kafr Ghati',
                ),
            71 =>
                array (
                    'id' => '72',
                    'governorate_id' => '2',
                    'city_name_ar' => 'منشأة البكاري',
                    'city_name_en' => 'Manshiyet Al Bakari',
                ),
            72 =>
                array (
                    'id' => '73',
                    'governorate_id' => '2',
                    'city_name_ar' => 'الدقى',
                    'city_name_en' => 'Dokki',
                ),
            73 =>
                array (
                    'id' => '74',
                    'governorate_id' => '2',
                    'city_name_ar' => 'العجوزة',
                    'city_name_en' => 'Agouza',
                ),
            74 =>
                array (
                    'id' => '75',
                    'governorate_id' => '2',
                    'city_name_ar' => 'الهرم',
                    'city_name_en' => 'Haram',
                ),
            75 =>
                array (
                    'id' => '76',
                    'governorate_id' => '2',
                    'city_name_ar' => 'الوراق',
                    'city_name_en' => 'Warraq',
                ),
            76 =>
                array (
                    'id' => '77',
                    'governorate_id' => '2',
                    'city_name_ar' => 'امبابة',
                    'city_name_en' => 'Imbaba',
                ),
            77 =>
                array (
                    'id' => '78',
                    'governorate_id' => '2',
                    'city_name_ar' => 'بولاق الدكرور',
                    'city_name_en' => 'Boulaq Dakrour',
                ),
            78 =>
                array (
                    'id' => '79',
                    'governorate_id' => '2',
                    'city_name_ar' => 'الواحات البحرية',
                    'city_name_en' => 'Al Wahat Al Baharia',
                ),
            79 =>
                array (
                    'id' => '80',
                    'governorate_id' => '2',
                    'city_name_ar' => 'العمرانية',
                    'city_name_en' => 'Omraneya',
                ),
            80 =>
                array (
                    'id' => '81',
                    'governorate_id' => '2',
                    'city_name_ar' => 'المنيب',
                    'city_name_en' => 'Moneeb',
                ),
            81 =>
                array (
                    'id' => '82',
                    'governorate_id' => '2',
                    'city_name_ar' => 'بين السرايات',
                    'city_name_en' => 'Bin Alsarayat',
                ),
            82 =>
                array (
                    'id' => '83',
                    'governorate_id' => '2',
                    'city_name_ar' => 'الكيت كات',
                    'city_name_en' => 'Kit Kat',
                ),
            83 =>
                array (
                    'id' => '84',
                    'governorate_id' => '2',
                    'city_name_ar' => 'المهندسين',
                    'city_name_en' => 'Mohandessin',
                ),
            84 =>
                array (
                    'id' => '85',
                    'governorate_id' => '2',
                    'city_name_ar' => 'فيصل',
                    'city_name_en' => 'Faisal',
                ),
            85 =>
                array (
                    'id' => '86',
                    'governorate_id' => '2',
                    'city_name_ar' => 'أبو رواش',
                    'city_name_en' => 'Abu Rawash',
                ),
            86 =>
                array (
                    'id' => '87',
                    'governorate_id' => '2',
                    'city_name_ar' => 'حدائق الأهرام',
                    'city_name_en' => 'Hadayek Alahram',
                ),
            87 =>
                array (
                    'id' => '88',
                    'governorate_id' => '2',
                    'city_name_ar' => 'الحرانية',
                    'city_name_en' => 'Haraneya',
                ),
            88 =>
                array (
                    'id' => '89',
                    'governorate_id' => '2',
                    'city_name_ar' => 'حدائق اكتوبر',
                    'city_name_en' => 'Hadayek October',
                ),
            89 =>
                array (
                    'id' => '90',
                    'governorate_id' => '2',
                    'city_name_ar' => 'صفط اللبن',
                    'city_name_en' => 'Saft Allaban',
                ),
            90 =>
                array (
                    'id' => '91',
                    'governorate_id' => '2',
                    'city_name_ar' => 'القرية الذكية',
                    'city_name_en' => 'Smart Village',
                ),
            91 =>
                array (
                    'id' => '92',
                    'governorate_id' => '2',
                    'city_name_ar' => 'ارض اللواء',
                    'city_name_en' => 'Ard Ellwaa',
                ),
            92 =>
                array (
                    'id' => '93',
                    'governorate_id' => '3',
                    'city_name_ar' => 'ابو قير',
                    'city_name_en' => 'Abu Qir',
                ),
            93 =>
                array (
                    'id' => '94',
                    'governorate_id' => '3',
                    'city_name_ar' => 'الابراهيمية',
                    'city_name_en' => 'Al Ibrahimeyah',
                ),
            94 =>
                array (
                    'id' => '95',
                    'governorate_id' => '3',
                    'city_name_ar' => 'الأزاريطة',
                    'city_name_en' => 'Azarita',
                ),
            95 =>
                array (
                    'id' => '96',
                    'governorate_id' => '3',
                    'city_name_ar' => 'الانفوشى',
                    'city_name_en' => 'Anfoushi',
                ),
            96 =>
                array (
                    'id' => '97',
                    'governorate_id' => '3',
                    'city_name_ar' => 'الدخيلة',
                    'city_name_en' => 'Dekheila',
                ),
            97 =>
                array (
                    'id' => '98',
                    'governorate_id' => '3',
                    'city_name_ar' => 'السيوف',
                    'city_name_en' => 'El Soyof',
                ),
            98 =>
                array (
                    'id' => '99',
                    'governorate_id' => '3',
                    'city_name_ar' => 'العامرية',
                    'city_name_en' => 'Ameria',
                ),
            99 =>
                array (
                    'id' => '100',
                    'governorate_id' => '3',
                    'city_name_ar' => 'اللبان',
                    'city_name_en' => 'El Labban',
                ),
            100 =>
                array (
                    'id' => '101',
                    'governorate_id' => '3',
                    'city_name_ar' => 'المفروزة',
                    'city_name_en' => 'Al Mafrouza',
                ),
            101 =>
                array (
                    'id' => '102',
                    'governorate_id' => '3',
                    'city_name_ar' => 'المنتزه',
                    'city_name_en' => 'El Montaza',
                ),
            102 =>
                array (
                    'id' => '103',
                    'governorate_id' => '3',
                    'city_name_ar' => 'المنشية',
                    'city_name_en' => 'Mansheya',
                ),
            103 =>
                array (
                    'id' => '104',
                    'governorate_id' => '3',
                    'city_name_ar' => 'الناصرية',
                    'city_name_en' => 'Naseria',
                ),
            104 =>
                array (
                    'id' => '105',
                    'governorate_id' => '3',
                    'city_name_ar' => 'امبروزو',
                    'city_name_en' => 'Ambrozo',
                ),
            105 =>
                array (
                    'id' => '106',
                    'governorate_id' => '3',
                    'city_name_ar' => 'باب شرق',
                    'city_name_en' => 'Bab Sharq',
                ),
            106 =>
                array (
                    'id' => '107',
                    'governorate_id' => '3',
                    'city_name_ar' => 'برج العرب',
                    'city_name_en' => 'Bourj Alarab',
                ),
            107 =>
                array (
                    'id' => '108',
                    'governorate_id' => '3',
                    'city_name_ar' => 'ستانلى',
                    'city_name_en' => 'Stanley',
                ),
            108 =>
                array (
                    'id' => '109',
                    'governorate_id' => '3',
                    'city_name_ar' => 'سموحة',
                    'city_name_en' => 'Smouha',
                ),
            109 =>
                array (
                    'id' => '110',
                    'governorate_id' => '3',
                    'city_name_ar' => 'سيدى بشر',
                    'city_name_en' => 'Sidi Bishr',
                ),
            110 =>
                array (
                    'id' => '111',
                    'governorate_id' => '3',
                    'city_name_ar' => 'شدس',
                    'city_name_en' => 'Shads',
                ),
            111 =>
                array (
                    'id' => '112',
                    'governorate_id' => '3',
                    'city_name_ar' => 'غيط العنب',
                    'city_name_en' => 'Gheet Alenab',
                ),
            112 =>
                array (
                    'id' => '113',
                    'governorate_id' => '3',
                    'city_name_ar' => 'فلمينج',
                    'city_name_en' => 'Fleming',
                ),
            113 =>
                array (
                    'id' => '114',
                    'governorate_id' => '3',
                    'city_name_ar' => 'فيكتوريا',
                    'city_name_en' => 'Victoria',
                ),
            114 =>
                array (
                    'id' => '115',
                    'governorate_id' => '3',
                    'city_name_ar' => 'كامب شيزار',
                    'city_name_en' => 'Camp Shizar',
                ),
            115 =>
                array (
                    'id' => '116',
                    'governorate_id' => '3',
                    'city_name_ar' => 'كرموز',
                    'city_name_en' => 'Karmooz',
                ),
            116 =>
                array (
                    'id' => '117',
                    'governorate_id' => '3',
                    'city_name_ar' => 'محطة الرمل',
                    'city_name_en' => 'Mahta Alraml',
                ),
            117 =>
                array (
                    'id' => '118',
                    'governorate_id' => '3',
                    'city_name_ar' => 'مينا البصل',
                    'city_name_en' => 'Mina El-Basal',
                ),
            118 =>
                array (
                    'id' => '119',
                    'governorate_id' => '3',
                    'city_name_ar' => 'العصافرة',
                    'city_name_en' => 'Asafra',
                ),
            119 =>
                array (
                    'id' => '120',
                    'governorate_id' => '3',
                    'city_name_ar' => 'العجمي',
                    'city_name_en' => 'Agamy',
                ),
            120 =>
                array (
                    'id' => '121',
                    'governorate_id' => '3',
                    'city_name_ar' => 'بكوس',
                    'city_name_en' => 'Bakos',
                ),
            121 =>
                array (
                    'id' => '122',
                    'governorate_id' => '3',
                    'city_name_ar' => 'بولكلي',
                    'city_name_en' => 'Boulkly',
                ),
            122 =>
                array (
                    'id' => '123',
                    'governorate_id' => '3',
                    'city_name_ar' => 'كليوباترا',
                    'city_name_en' => 'Cleopatra',
                ),
            123 =>
                array (
                    'id' => '124',
                    'governorate_id' => '3',
                    'city_name_ar' => 'جليم',
                    'city_name_en' => 'Glim',
                ),
            124 =>
                array (
                    'id' => '125',
                    'governorate_id' => '3',
                    'city_name_ar' => 'المعمورة',
                    'city_name_en' => 'Al Mamurah',
                ),
            125 =>
                array (
                    'id' => '126',
                    'governorate_id' => '3',
                    'city_name_ar' => 'المندرة',
                    'city_name_en' => 'Al Mandara',
                ),
            126 =>
                array (
                    'id' => '127',
                    'governorate_id' => '3',
                    'city_name_ar' => 'محرم بك',
                    'city_name_en' => 'Moharam Bek',
                ),
            127 =>
                array (
                    'id' => '128',
                    'governorate_id' => '3',
                    'city_name_ar' => 'الشاطبي',
                    'city_name_en' => 'Elshatby',
                ),
            128 =>
                array (
                    'id' => '129',
                    'governorate_id' => '3',
                    'city_name_ar' => 'سيدي جابر',
                    'city_name_en' => 'Sidi Gaber',
                ),
            129 =>
                array (
                    'id' => '130',
                    'governorate_id' => '3',
                    'city_name_ar' => 'الساحل الشمالي',
                    'city_name_en' => 'North Coast/sahel',
                ),
            130 =>
                array (
                    'id' => '131',
                    'governorate_id' => '3',
                    'city_name_ar' => 'الحضرة',
                    'city_name_en' => 'Alhadra',
                ),
            131 =>
                array (
                    'id' => '132',
                    'governorate_id' => '3',
                    'city_name_ar' => 'العطارين',
                    'city_name_en' => 'Alattarin',
                ),
            132 =>
                array (
                    'id' => '133',
                    'governorate_id' => '3',
                    'city_name_ar' => 'سيدي كرير',
                    'city_name_en' => 'Sidi Kerir',
                ),
            133 =>
                array (
                    'id' => '134',
                    'governorate_id' => '3',
                    'city_name_ar' => 'الجمرك',
                    'city_name_en' => 'Elgomrok',
                ),
            134 =>
                array (
                    'id' => '135',
                    'governorate_id' => '3',
                    'city_name_ar' => 'المكس',
                    'city_name_en' => 'Al Max',
                ),
            135 =>
                array (
                    'id' => '136',
                    'governorate_id' => '3',
                    'city_name_ar' => 'مارينا',
                    'city_name_en' => 'Marina',
                ),
            136 =>
                array (
                    'id' => '137',
                    'governorate_id' => '4',
                    'city_name_ar' => 'المنصورة',
                    'city_name_en' => 'Mansoura',
                ),
            137 =>
                array (
                    'id' => '138',
                    'governorate_id' => '4',
                    'city_name_ar' => 'طلخا',
                    'city_name_en' => 'Talkha',
                ),
            138 =>
                array (
                    'id' => '139',
                    'governorate_id' => '4',
                    'city_name_ar' => 'ميت غمر',
                    'city_name_en' => 'Mitt Ghamr',
                ),
            139 =>
                array (
                    'id' => '140',
                    'governorate_id' => '4',
                    'city_name_ar' => 'دكرنس',
                    'city_name_en' => 'Dekernes',
                ),
            140 =>
                array (
                    'id' => '141',
                    'governorate_id' => '4',
                    'city_name_ar' => 'أجا',
                    'city_name_en' => 'Aga',
                ),
            141 =>
                array (
                    'id' => '142',
                    'governorate_id' => '4',
                    'city_name_ar' => 'منية النصر',
                    'city_name_en' => 'Menia El Nasr',
                ),
            142 =>
                array (
                    'id' => '143',
                    'governorate_id' => '4',
                    'city_name_ar' => 'السنبلاوين',
                    'city_name_en' => 'Sinbillawin',
                ),
            143 =>
                array (
                    'id' => '144',
                    'governorate_id' => '4',
                    'city_name_ar' => 'الكردي',
                    'city_name_en' => 'El Kurdi',
                ),
            144 =>
                array (
                    'id' => '145',
                    'governorate_id' => '4',
                    'city_name_ar' => 'بني عبيد',
                    'city_name_en' => 'Bani Ubaid',
                ),
            145 =>
                array (
                    'id' => '146',
                    'governorate_id' => '4',
                    'city_name_ar' => 'المنزلة',
                    'city_name_en' => 'Al Manzala',
                ),
            146 =>
                array (
                    'id' => '147',
                    'governorate_id' => '4',
                    'city_name_ar' => 'تمي الأمديد',
                    'city_name_en' => 'tami al\'amdid',
                ),
            147 =>
                array (
                    'id' => '148',
                    'governorate_id' => '4',
                    'city_name_ar' => 'الجمالية',
                    'city_name_en' => 'aljamalia',
                ),
            148 =>
                array (
                    'id' => '149',
                    'governorate_id' => '4',
                    'city_name_ar' => 'شربين',
                    'city_name_en' => 'Sherbin',
                ),
            149 =>
                array (
                    'id' => '150',
                    'governorate_id' => '4',
                    'city_name_ar' => 'المطرية',
                    'city_name_en' => 'Mataria',
                ),
            150 =>
                array (
                    'id' => '151',
                    'governorate_id' => '4',
                    'city_name_ar' => 'بلقاس',
                    'city_name_en' => 'Belqas',
                ),
            151 =>
                array (
                    'id' => '152',
                    'governorate_id' => '4',
                    'city_name_ar' => 'ميت سلسيل',
                    'city_name_en' => 'Meet Salsil',
                ),
            152 =>
                array (
                    'id' => '153',
                    'governorate_id' => '4',
                    'city_name_ar' => 'جمصة',
                    'city_name_en' => 'Gamasa',
                ),
            153 =>
                array (
                    'id' => '154',
                    'governorate_id' => '4',
                    'city_name_ar' => 'محلة دمنة',
                    'city_name_en' => 'Mahalat Damana',
                ),
            154 =>
                array (
                    'id' => '155',
                    'governorate_id' => '4',
                    'city_name_ar' => 'نبروه',
                    'city_name_en' => 'Nabroh',
                ),
            155 =>
                array (
                    'id' => '156',
                    'governorate_id' => '5',
                    'city_name_ar' => 'الغردقة',
                    'city_name_en' => 'Hurghada',
                ),
            156 =>
                array (
                    'id' => '157',
                    'governorate_id' => '5',
                    'city_name_ar' => 'رأس غارب',
                    'city_name_en' => 'Ras Ghareb',
                ),
            157 =>
                array (
                    'id' => '158',
                    'governorate_id' => '5',
                    'city_name_ar' => 'سفاجا',
                    'city_name_en' => 'Safaga',
                ),
            158 =>
                array (
                    'id' => '159',
                    'governorate_id' => '5',
                    'city_name_ar' => 'القصير',
                    'city_name_en' => 'El Qusiar',
                ),
            159 =>
                array (
                    'id' => '160',
                    'governorate_id' => '5',
                    'city_name_ar' => 'مرسى علم',
                    'city_name_en' => 'Marsa Alam',
                ),
            160 =>
                array (
                    'id' => '161',
                    'governorate_id' => '5',
                    'city_name_ar' => 'الشلاتين',
                    'city_name_en' => 'Shalatin',
                ),
            161 =>
                array (
                    'id' => '162',
                    'governorate_id' => '5',
                    'city_name_ar' => 'حلايب',
                    'city_name_en' => 'Halaib',
                ),
            162 =>
                array (
                    'id' => '163',
                    'governorate_id' => '5',
                    'city_name_ar' => 'الدهار',
                    'city_name_en' => 'Aldahar',
                ),
            163 =>
                array (
                    'id' => '164',
                    'governorate_id' => '6',
                    'city_name_ar' => 'دمنهور',
                    'city_name_en' => 'Damanhour',
                ),
            164 =>
                array (
                    'id' => '165',
                    'governorate_id' => '6',
                    'city_name_ar' => 'كفر الدوار',
                    'city_name_en' => 'Kafr El Dawar',
                ),
            165 =>
                array (
                    'id' => '166',
                    'governorate_id' => '6',
                    'city_name_ar' => 'رشيد',
                    'city_name_en' => 'Rashid',
                ),
            166 =>
                array (
                    'id' => '167',
                    'governorate_id' => '6',
                    'city_name_ar' => 'إدكو',
                    'city_name_en' => 'Edco',
                ),
            167 =>
                array (
                    'id' => '168',
                    'governorate_id' => '6',
                    'city_name_ar' => 'أبو المطامير',
                    'city_name_en' => 'Abu al-Matamir',
                ),
            168 =>
                array (
                    'id' => '169',
                    'governorate_id' => '6',
                    'city_name_ar' => 'أبو حمص',
                    'city_name_en' => 'Abu Homs',
                ),
            169 =>
                array (
                    'id' => '170',
                    'governorate_id' => '6',
                    'city_name_ar' => 'الدلنجات',
                    'city_name_en' => 'Delengat',
                ),
            170 =>
                array (
                    'id' => '171',
                    'governorate_id' => '6',
                    'city_name_ar' => 'المحمودية',
                    'city_name_en' => 'Mahmoudiyah',
                ),
            171 =>
                array (
                    'id' => '172',
                    'governorate_id' => '6',
                    'city_name_ar' => 'الرحمانية',
                    'city_name_en' => 'Rahmaniyah',
                ),
            172 =>
                array (
                    'id' => '173',
                    'governorate_id' => '6',
                    'city_name_ar' => 'إيتاي البارود',
                    'city_name_en' => 'Itai Baroud',
                ),
            173 =>
                array (
                    'id' => '174',
                    'governorate_id' => '6',
                    'city_name_ar' => 'حوش عيسى',
                    'city_name_en' => 'Housh Eissa',
                ),
            174 =>
                array (
                    'id' => '175',
                    'governorate_id' => '6',
                    'city_name_ar' => 'شبراخيت',
                    'city_name_en' => 'Shubrakhit',
                ),
            175 =>
                array (
                    'id' => '176',
                    'governorate_id' => '6',
                    'city_name_ar' => 'كوم حمادة',
                    'city_name_en' => 'Kom Hamada',
                ),
            176 =>
                array (
                    'id' => '177',
                    'governorate_id' => '6',
                    'city_name_ar' => 'بدر',
                    'city_name_en' => 'Badr',
                ),
            177 =>
                array (
                    'id' => '178',
                    'governorate_id' => '6',
                    'city_name_ar' => 'وادي النطرون',
                    'city_name_en' => 'Wadi Natrun',
                ),
            178 =>
                array (
                    'id' => '179',
                    'governorate_id' => '6',
                    'city_name_ar' => 'النوبارية الجديدة',
                    'city_name_en' => 'New Nubaria',
                ),
            179 =>
                array (
                    'id' => '180',
                    'governorate_id' => '6',
                    'city_name_ar' => 'النوبارية',
                    'city_name_en' => 'Alnoubareya',
                ),
            180 =>
                array (
                    'id' => '181',
                    'governorate_id' => '7',
                    'city_name_ar' => 'الفيوم',
                    'city_name_en' => 'Fayoum',
                ),
            181 =>
                array (
                    'id' => '182',
                    'governorate_id' => '7',
                    'city_name_ar' => 'الفيوم الجديدة',
                    'city_name_en' => 'Fayoum El Gedida',
                ),
            182 =>
                array (
                    'id' => '183',
                    'governorate_id' => '7',
                    'city_name_ar' => 'طامية',
                    'city_name_en' => 'Tamiya',
                ),
            183 =>
                array (
                    'id' => '184',
                    'governorate_id' => '7',
                    'city_name_ar' => 'سنورس',
                    'city_name_en' => 'Snores',
                ),
            184 =>
                array (
                    'id' => '185',
                    'governorate_id' => '7',
                    'city_name_ar' => 'إطسا',
                    'city_name_en' => 'Etsa',
                ),
            185 =>
                array (
                    'id' => '186',
                    'governorate_id' => '7',
                    'city_name_ar' => 'إبشواي',
                    'city_name_en' => 'Epschway',
                ),
            186 =>
                array (
                    'id' => '187',
                    'governorate_id' => '7',
                    'city_name_ar' => 'يوسف الصديق',
                    'city_name_en' => 'Yusuf El Sediaq',
                ),
            187 =>
                array (
                    'id' => '188',
                    'governorate_id' => '7',
                    'city_name_ar' => 'الحادقة',
                    'city_name_en' => 'Hadqa',
                ),
            188 =>
                array (
                    'id' => '189',
                    'governorate_id' => '7',
                    'city_name_ar' => 'اطسا',
                    'city_name_en' => 'Atsa',
                ),
            189 =>
                array (
                    'id' => '190',
                    'governorate_id' => '7',
                    'city_name_ar' => 'الجامعة',
                    'city_name_en' => 'Algamaa',
                ),
            190 =>
                array (
                    'id' => '191',
                    'governorate_id' => '7',
                    'city_name_ar' => 'السيالة',
                    'city_name_en' => 'Sayala',
                ),
            191 =>
                array (
                    'id' => '192',
                    'governorate_id' => '8',
                    'city_name_ar' => 'طنطا',
                    'city_name_en' => 'Tanta',
                ),
            192 =>
                array (
                    'id' => '193',
                    'governorate_id' => '8',
                    'city_name_ar' => 'المحلة الكبرى',
                    'city_name_en' => 'Al Mahalla Al Kobra',
                ),
            193 =>
                array (
                    'id' => '194',
                    'governorate_id' => '8',
                    'city_name_ar' => 'كفر الزيات',
                    'city_name_en' => 'Kafr El Zayat',
                ),
            194 =>
                array (
                    'id' => '195',
                    'governorate_id' => '8',
                    'city_name_ar' => 'زفتى',
                    'city_name_en' => 'Zefta',
                ),
            195 =>
                array (
                    'id' => '196',
                    'governorate_id' => '8',
                    'city_name_ar' => 'السنطة',
                    'city_name_en' => 'El Santa',
                ),
            196 =>
                array (
                    'id' => '197',
                    'governorate_id' => '8',
                    'city_name_ar' => 'قطور',
                    'city_name_en' => 'Qutour',
                ),
            197 =>
                array (
                    'id' => '198',
                    'governorate_id' => '8',
                    'city_name_ar' => 'بسيون',
                    'city_name_en' => 'Basion',
                ),
            198 =>
                array (
                    'id' => '199',
                    'governorate_id' => '8',
                    'city_name_ar' => 'سمنود',
                    'city_name_en' => 'Samannoud',
                ),
            199 =>
                array (
                    'id' => '200',
                    'governorate_id' => '9',
                    'city_name_ar' => 'الإسماعيلية',
                    'city_name_en' => 'Ismailia',
                ),
            200 =>
                array (
                    'id' => '201',
                    'governorate_id' => '9',
                    'city_name_ar' => 'فايد',
                    'city_name_en' => 'Fayed',
                ),
            201 =>
                array (
                    'id' => '202',
                    'governorate_id' => '9',
                    'city_name_ar' => 'القنطرة شرق',
                    'city_name_en' => 'Qantara Sharq',
                ),
            202 =>
                array (
                    'id' => '203',
                    'governorate_id' => '9',
                    'city_name_ar' => 'القنطرة غرب',
                    'city_name_en' => 'Qantara Gharb',
                ),
            203 =>
                array (
                    'id' => '204',
                    'governorate_id' => '9',
                    'city_name_ar' => 'التل الكبير',
                    'city_name_en' => 'El Tal El Kabier',
                ),
            204 =>
                array (
                    'id' => '205',
                    'governorate_id' => '9',
                    'city_name_ar' => 'أبو صوير',
                    'city_name_en' => 'Abu Sawir',
                ),
            205 =>
                array (
                    'id' => '206',
                    'governorate_id' => '9',
                    'city_name_ar' => 'القصاصين الجديدة',
                    'city_name_en' => 'Kasasien El Gedida',
                ),
            206 =>
                array (
                    'id' => '207',
                    'governorate_id' => '9',
                    'city_name_ar' => 'نفيشة',
                    'city_name_en' => 'Nefesha',
                ),
            207 =>
                array (
                    'id' => '208',
                    'governorate_id' => '9',
                    'city_name_ar' => 'الشيخ زايد',
                    'city_name_en' => 'Sheikh Zayed',
                ),
            208 =>
                array (
                    'id' => '209',
                    'governorate_id' => '10',
                    'city_name_ar' => 'شبين الكوم',
                    'city_name_en' => 'Shbeen El Koom',
                ),
            209 =>
                array (
                    'id' => '210',
                    'governorate_id' => '10',
                    'city_name_ar' => 'مدينة السادات',
                    'city_name_en' => 'Sadat City',
                ),
            210 =>
                array (
                    'id' => '211',
                    'governorate_id' => '10',
                    'city_name_ar' => 'منوف',
                    'city_name_en' => 'Menouf',
                ),
            211 =>
                array (
                    'id' => '212',
                    'governorate_id' => '10',
                    'city_name_ar' => 'سرس الليان',
                    'city_name_en' => 'Sars El-Layan',
                ),
            212 =>
                array (
                    'id' => '213',
                    'governorate_id' => '10',
                    'city_name_ar' => 'أشمون',
                    'city_name_en' => 'Ashmon',
                ),
            213 =>
                array (
                    'id' => '214',
                    'governorate_id' => '10',
                    'city_name_ar' => 'الباجور',
                    'city_name_en' => 'Al Bagor',
                ),
            214 =>
                array (
                    'id' => '215',
                    'governorate_id' => '10',
                    'city_name_ar' => 'قويسنا',
                    'city_name_en' => 'Quesna',
                ),
            215 =>
                array (
                    'id' => '216',
                    'governorate_id' => '10',
                    'city_name_ar' => 'بركة السبع',
                    'city_name_en' => 'Berkat El Saba',
                ),
            216 =>
                array (
                    'id' => '217',
                    'governorate_id' => '10',
                    'city_name_ar' => 'تلا',
                    'city_name_en' => 'Tala',
                ),
            217 =>
                array (
                    'id' => '218',
                    'governorate_id' => '10',
                    'city_name_ar' => 'الشهداء',
                    'city_name_en' => 'Al Shohada',
                ),
            218 =>
                array (
                    'id' => '219',
                    'governorate_id' => '11',
                    'city_name_ar' => 'المنيا',
                    'city_name_en' => 'Minya',
                ),
            219 =>
                array (
                    'id' => '220',
                    'governorate_id' => '11',
                    'city_name_ar' => 'المنيا الجديدة',
                    'city_name_en' => 'Minya El Gedida',
                ),
            220 =>
                array (
                    'id' => '221',
                    'governorate_id' => '11',
                    'city_name_ar' => 'العدوة',
                    'city_name_en' => 'El Adwa',
                ),
            221 =>
                array (
                    'id' => '222',
                    'governorate_id' => '11',
                    'city_name_ar' => 'مغاغة',
                    'city_name_en' => 'Magagha',
                ),
            222 =>
                array (
                    'id' => '223',
                    'governorate_id' => '11',
                    'city_name_ar' => 'بني مزار',
                    'city_name_en' => 'Bani Mazar',
                ),
            223 =>
                array (
                    'id' => '224',
                    'governorate_id' => '11',
                    'city_name_ar' => 'مطاي',
                    'city_name_en' => 'Mattay',
                ),
            224 =>
                array (
                    'id' => '225',
                    'governorate_id' => '11',
                    'city_name_ar' => 'سمالوط',
                    'city_name_en' => 'Samalut',
                ),
            225 =>
                array (
                    'id' => '226',
                    'governorate_id' => '11',
                    'city_name_ar' => 'المدينة الفكرية',
                    'city_name_en' => 'Madinat El Fekria',
                ),
            226 =>
                array (
                    'id' => '227',
                    'governorate_id' => '11',
                    'city_name_ar' => 'ملوي',
                    'city_name_en' => 'Meloy',
                ),
            227 =>
                array (
                    'id' => '228',
                    'governorate_id' => '11',
                    'city_name_ar' => 'دير مواس',
                    'city_name_en' => 'Deir Mawas',
                ),
            228 =>
                array (
                    'id' => '229',
                    'governorate_id' => '11',
                    'city_name_ar' => 'ابو قرقاص',
                    'city_name_en' => 'Abu Qurqas',
                ),
            229 =>
                array (
                    'id' => '230',
                    'governorate_id' => '11',
                    'city_name_ar' => 'ارض سلطان',
                    'city_name_en' => 'Ard Sultan',
                ),
            230 =>
                array (
                    'id' => '231',
                    'governorate_id' => '12',
                    'city_name_ar' => 'بنها',
                    'city_name_en' => 'Banha',
                ),
            231 =>
                array (
                    'id' => '232',
                    'governorate_id' => '12',
                    'city_name_ar' => 'قليوب',
                    'city_name_en' => 'Qalyub',
                ),
            232 =>
                array (
                    'id' => '233',
                    'governorate_id' => '12',
                    'city_name_ar' => 'شبرا الخيمة',
                    'city_name_en' => 'Shubra Al Khaimah',
                ),
            233 =>
                array (
                    'id' => '234',
                    'governorate_id' => '12',
                    'city_name_ar' => 'القناطر الخيرية',
                    'city_name_en' => 'Al Qanater Charity',
                ),
            234 =>
                array (
                    'id' => '235',
                    'governorate_id' => '12',
                    'city_name_ar' => 'الخانكة',
                    'city_name_en' => 'Khanka',
                ),
            235 =>
                array (
                    'id' => '236',
                    'governorate_id' => '12',
                    'city_name_ar' => 'كفر شكر',
                    'city_name_en' => 'Kafr Shukr',
                ),
            236 =>
                array (
                    'id' => '237',
                    'governorate_id' => '12',
                    'city_name_ar' => 'طوخ',
                    'city_name_en' => 'Tukh',
                ),
            237 =>
                array (
                    'id' => '238',
                    'governorate_id' => '12',
                    'city_name_ar' => 'قها',
                    'city_name_en' => 'Qaha',
                ),
            238 =>
                array (
                    'id' => '239',
                    'governorate_id' => '12',
                    'city_name_ar' => 'العبور',
                    'city_name_en' => 'Obour',
                ),
            239 =>
                array (
                    'id' => '240',
                    'governorate_id' => '12',
                    'city_name_ar' => 'الخصوص',
                    'city_name_en' => 'Khosous',
                ),
            240 =>
                array (
                    'id' => '241',
                    'governorate_id' => '12',
                    'city_name_ar' => 'شبين القناطر',
                    'city_name_en' => 'Shibin Al Qanater',
                ),
            241 =>
                array (
                    'id' => '242',
                    'governorate_id' => '12',
                    'city_name_ar' => 'مسطرد',
                    'city_name_en' => 'Mostorod',
                ),
            242 =>
                array (
                    'id' => '243',
                    'governorate_id' => '13',
                    'city_name_ar' => 'الخارجة',
                    'city_name_en' => 'El Kharga',
                ),
            243 =>
                array (
                    'id' => '244',
                    'governorate_id' => '13',
                    'city_name_ar' => 'باريس',
                    'city_name_en' => 'Paris',
                ),
            244 =>
                array (
                    'id' => '245',
                    'governorate_id' => '13',
                    'city_name_ar' => 'موط',
                    'city_name_en' => 'Mout',
                ),
            245 =>
                array (
                    'id' => '246',
                    'governorate_id' => '13',
                    'city_name_ar' => 'الفرافرة',
                    'city_name_en' => 'Farafra',
                ),
            246 =>
                array (
                    'id' => '247',
                    'governorate_id' => '13',
                    'city_name_ar' => 'بلاط',
                    'city_name_en' => 'Balat',
                ),
            247 =>
                array (
                    'id' => '248',
                    'governorate_id' => '13',
                    'city_name_ar' => 'الداخلة',
                    'city_name_en' => 'Dakhla',
                ),
            248 =>
                array (
                    'id' => '249',
                    'governorate_id' => '14',
                    'city_name_ar' => 'السويس',
                    'city_name_en' => 'Suez',
                ),
            249 =>
                array (
                    'id' => '250',
                    'governorate_id' => '14',
                    'city_name_ar' => 'الجناين',
                    'city_name_en' => 'Alganayen',
                ),
            250 =>
                array (
                    'id' => '251',
                    'governorate_id' => '14',
                    'city_name_ar' => 'عتاقة',
                    'city_name_en' => 'Ataqah',
                ),
            251 =>
                array (
                    'id' => '252',
                    'governorate_id' => '14',
                    'city_name_ar' => 'العين السخنة',
                    'city_name_en' => 'Ain Sokhna',
                ),
            252 =>
                array (
                    'id' => '253',
                    'governorate_id' => '14',
                    'city_name_ar' => 'فيصل',
                    'city_name_en' => 'Faysal',
                ),
            253 =>
                array (
                    'id' => '254',
                    'governorate_id' => '15',
                    'city_name_ar' => 'أسوان',
                    'city_name_en' => 'Aswan',
                ),
            254 =>
                array (
                    'id' => '255',
                    'governorate_id' => '15',
                    'city_name_ar' => 'أسوان الجديدة',
                    'city_name_en' => 'Aswan El Gedida',
                ),
            255 =>
                array (
                    'id' => '256',
                    'governorate_id' => '15',
                    'city_name_ar' => 'دراو',
                    'city_name_en' => 'Drau',
                ),
            256 =>
                array (
                    'id' => '257',
                    'governorate_id' => '15',
                    'city_name_ar' => 'كوم أمبو',
                    'city_name_en' => 'Kom Ombo',
                ),
            257 =>
                array (
                    'id' => '258',
                    'governorate_id' => '15',
                    'city_name_ar' => 'نصر النوبة',
                    'city_name_en' => 'Nasr Al Nuba',
                ),
            258 =>
                array (
                    'id' => '259',
                    'governorate_id' => '15',
                    'city_name_ar' => 'كلابشة',
                    'city_name_en' => 'Kalabsha',
                ),
            259 =>
                array (
                    'id' => '260',
                    'governorate_id' => '15',
                    'city_name_ar' => 'إدفو',
                    'city_name_en' => 'Edfu',
                ),
            260 =>
                array (
                    'id' => '261',
                    'governorate_id' => '15',
                    'city_name_ar' => 'الرديسية',
                    'city_name_en' => 'Al-Radisiyah',
                ),
            261 =>
                array (
                    'id' => '262',
                    'governorate_id' => '15',
                    'city_name_ar' => 'البصيلية',
                    'city_name_en' => 'Al Basilia',
                ),
            262 =>
                array (
                    'id' => '263',
                    'governorate_id' => '15',
                    'city_name_ar' => 'السباعية',
                    'city_name_en' => 'Al Sibaeia',
                ),
            263 =>
                array (
                    'id' => '264',
                    'governorate_id' => '15',
                    'city_name_ar' => 'ابوسمبل السياحية',
                    'city_name_en' => 'Abo Simbl Al Siyahia',
                ),
            264 =>
                array (
                    'id' => '265',
                    'governorate_id' => '15',
                    'city_name_ar' => 'مرسى علم',
                    'city_name_en' => 'Marsa Alam',
                ),
            265 =>
                array (
                    'id' => '266',
                    'governorate_id' => '16',
                    'city_name_ar' => 'أسيوط',
                    'city_name_en' => 'Assiut',
                ),
            266 =>
                array (
                    'id' => '267',
                    'governorate_id' => '16',
                    'city_name_ar' => 'أسيوط الجديدة',
                    'city_name_en' => 'Assiut El Gedida',
                ),
            267 =>
                array (
                    'id' => '268',
                    'governorate_id' => '16',
                    'city_name_ar' => 'ديروط',
                    'city_name_en' => 'Dayrout',
                ),
            268 =>
                array (
                    'id' => '269',
                    'governorate_id' => '16',
                    'city_name_ar' => 'منفلوط',
                    'city_name_en' => 'Manfalut',
                ),
            269 =>
                array (
                    'id' => '270',
                    'governorate_id' => '16',
                    'city_name_ar' => 'القوصية',
                    'city_name_en' => 'Qusiya',
                ),
            270 =>
                array (
                    'id' => '271',
                    'governorate_id' => '16',
                    'city_name_ar' => 'أبنوب',
                    'city_name_en' => 'Abnoub',
                ),
            271 =>
                array (
                    'id' => '272',
                    'governorate_id' => '16',
                    'city_name_ar' => 'أبو تيج',
                    'city_name_en' => 'Abu Tig',
                ),
            272 =>
                array (
                    'id' => '273',
                    'governorate_id' => '16',
                    'city_name_ar' => 'الغنايم',
                    'city_name_en' => 'El Ghanaim',
                ),
            273 =>
                array (
                    'id' => '274',
                    'governorate_id' => '16',
                    'city_name_ar' => 'ساحل سليم',
                    'city_name_en' => 'Sahel Selim',
                ),
            274 =>
                array (
                    'id' => '275',
                    'governorate_id' => '16',
                    'city_name_ar' => 'البداري',
                    'city_name_en' => 'El Badari',
                ),
            275 =>
                array (
                    'id' => '276',
                    'governorate_id' => '16',
                    'city_name_ar' => 'صدفا',
                    'city_name_en' => 'Sidfa',
                ),
            276 =>
                array (
                    'id' => '277',
                    'governorate_id' => '17',
                    'city_name_ar' => 'بني سويف',
                    'city_name_en' => 'Bani Sweif',
                ),
            277 =>
                array (
                    'id' => '278',
                    'governorate_id' => '17',
                    'city_name_ar' => 'بني سويف الجديدة',
                    'city_name_en' => 'Beni Suef El Gedida',
                ),
            278 =>
                array (
                    'id' => '279',
                    'governorate_id' => '17',
                    'city_name_ar' => 'الواسطى',
                    'city_name_en' => 'Al Wasta',
                ),
            279 =>
                array (
                    'id' => '280',
                    'governorate_id' => '17',
                    'city_name_ar' => 'ناصر',
                    'city_name_en' => 'Naser',
                ),
            280 =>
                array (
                    'id' => '281',
                    'governorate_id' => '17',
                    'city_name_ar' => 'إهناسيا',
                    'city_name_en' => 'Ehnasia',
                ),
            281 =>
                array (
                    'id' => '282',
                    'governorate_id' => '17',
                    'city_name_ar' => 'ببا',
                    'city_name_en' => 'beba',
                ),
            282 =>
                array (
                    'id' => '283',
                    'governorate_id' => '17',
                    'city_name_ar' => 'الفشن',
                    'city_name_en' => 'Fashn',
                ),
            283 =>
                array (
                    'id' => '284',
                    'governorate_id' => '17',
                    'city_name_ar' => 'سمسطا',
                    'city_name_en' => 'Somasta',
                ),
            284 =>
                array (
                    'id' => '285',
                    'governorate_id' => '17',
                    'city_name_ar' => 'الاباصيرى',
                    'city_name_en' => 'Alabbaseri',
                ),
            285 =>
                array (
                    'id' => '286',
                    'governorate_id' => '17',
                    'city_name_ar' => 'مقبل',
                    'city_name_en' => 'Mokbel',
                ),
            286 =>
                array (
                    'id' => '287',
                    'governorate_id' => '18',
                    'city_name_ar' => 'بورسعيد',
                    'city_name_en' => 'PorSaid',
                ),
            287 =>
                array (
                    'id' => '288',
                    'governorate_id' => '18',
                    'city_name_ar' => 'بورفؤاد',
                    'city_name_en' => 'Port Fouad',
                ),
            288 =>
                array (
                    'id' => '289',
                    'governorate_id' => '18',
                    'city_name_ar' => 'العرب',
                    'city_name_en' => 'Alarab',
                ),
            289 =>
                array (
                    'id' => '290',
                    'governorate_id' => '18',
                    'city_name_ar' => 'حى الزهور',
                    'city_name_en' => 'Zohour',
                ),
            290 =>
                array (
                    'id' => '291',
                    'governorate_id' => '18',
                    'city_name_ar' => 'حى الشرق',
                    'city_name_en' => 'Alsharq',
                ),
            291 =>
                array (
                    'id' => '292',
                    'governorate_id' => '18',
                    'city_name_ar' => 'حى الضواحى',
                    'city_name_en' => 'Aldawahi',
                ),
            292 =>
                array (
                    'id' => '293',
                    'governorate_id' => '18',
                    'city_name_ar' => 'حى المناخ',
                    'city_name_en' => 'Almanakh',
                ),
            293 =>
                array (
                    'id' => '294',
                    'governorate_id' => '18',
                    'city_name_ar' => 'حى مبارك',
                    'city_name_en' => 'Mubarak',
                ),
            294 =>
                array (
                    'id' => '295',
                    'governorate_id' => '19',
                    'city_name_ar' => 'دمياط',
                    'city_name_en' => 'Damietta',
                ),
            295 =>
                array (
                    'id' => '296',
                    'governorate_id' => '19',
                    'city_name_ar' => 'دمياط الجديدة',
                    'city_name_en' => 'New Damietta',
                ),
            296 =>
                array (
                    'id' => '297',
                    'governorate_id' => '19',
                    'city_name_ar' => 'رأس البر',
                    'city_name_en' => 'Ras El Bar',
                ),
            297 =>
                array (
                    'id' => '298',
                    'governorate_id' => '19',
                    'city_name_ar' => 'فارسكور',
                    'city_name_en' => 'Faraskour',
                ),
            298 =>
                array (
                    'id' => '299',
                    'governorate_id' => '19',
                    'city_name_ar' => 'الزرقا',
                    'city_name_en' => 'Zarqa',
                ),
            299 =>
                array (
                    'id' => '300',
                    'governorate_id' => '19',
                    'city_name_ar' => 'السرو',
                    'city_name_en' => 'alsaru',
                ),
            300 =>
                array (
                    'id' => '301',
                    'governorate_id' => '19',
                    'city_name_ar' => 'الروضة',
                    'city_name_en' => 'alruwda',
                ),
            301 =>
                array (
                    'id' => '302',
                    'governorate_id' => '19',
                    'city_name_ar' => 'كفر البطيخ',
                    'city_name_en' => 'Kafr El-Batikh',
                ),
            302 =>
                array (
                    'id' => '303',
                    'governorate_id' => '19',
                    'city_name_ar' => 'عزبة البرج',
                    'city_name_en' => 'Azbet Al Burg',
                ),
            303 =>
                array (
                    'id' => '304',
                    'governorate_id' => '19',
                    'city_name_ar' => 'ميت أبو غالب',
                    'city_name_en' => 'Meet Abou Ghalib',
                ),
            304 =>
                array (
                    'id' => '305',
                    'governorate_id' => '19',
                    'city_name_ar' => 'كفر سعد',
                    'city_name_en' => 'Kafr Saad',
                ),
            305 =>
                array (
                    'id' => '306',
                    'governorate_id' => '20',
                    'city_name_ar' => 'الزقازيق',
                    'city_name_en' => 'Zagazig',
                ),
            306 =>
                array (
                    'id' => '307',
                    'governorate_id' => '20',
                    'city_name_ar' => 'العاشر من رمضان',
                    'city_name_en' => 'Al Ashr Men Ramadan',
                ),
            307 =>
                array (
                    'id' => '308',
                    'governorate_id' => '20',
                    'city_name_ar' => 'منيا القمح',
                    'city_name_en' => 'Minya Al Qamh',
                ),
            308 =>
                array (
                    'id' => '309',
                    'governorate_id' => '20',
                    'city_name_ar' => 'بلبيس',
                    'city_name_en' => 'Belbeis',
                ),
            309 =>
                array (
                    'id' => '310',
                    'governorate_id' => '20',
                    'city_name_ar' => 'مشتول السوق',
                    'city_name_en' => 'Mashtoul El Souq',
                ),
            310 =>
                array (
                    'id' => '311',
                    'governorate_id' => '20',
                    'city_name_ar' => 'القنايات',
                    'city_name_en' => 'Qenaiat',
                ),
            311 =>
                array (
                    'id' => '312',
                    'governorate_id' => '20',
                    'city_name_ar' => 'أبو حماد',
                    'city_name_en' => 'Abu Hammad',
                ),
            312 =>
                array (
                    'id' => '313',
                    'governorate_id' => '20',
                    'city_name_ar' => 'القرين',
                    'city_name_en' => 'El Qurain',
                ),
            313 =>
                array (
                    'id' => '314',
                    'governorate_id' => '20',
                    'city_name_ar' => 'ههيا',
                    'city_name_en' => 'Hehia',
                ),
            314 =>
                array (
                    'id' => '315',
                    'governorate_id' => '20',
                    'city_name_ar' => 'أبو كبير',
                    'city_name_en' => 'Abu Kabir',
                ),
            315 =>
                array (
                    'id' => '316',
                    'governorate_id' => '20',
                    'city_name_ar' => 'فاقوس',
                    'city_name_en' => 'Faccus',
                ),
            316 =>
                array (
                    'id' => '317',
                    'governorate_id' => '20',
                    'city_name_ar' => 'الصالحية الجديدة',
                    'city_name_en' => 'El Salihia El Gedida',
                ),
            317 =>
                array (
                    'id' => '318',
                    'governorate_id' => '20',
                    'city_name_ar' => 'الإبراهيمية',
                    'city_name_en' => 'Al Ibrahimiyah',
                ),
            318 =>
                array (
                    'id' => '319',
                    'governorate_id' => '20',
                    'city_name_ar' => 'ديرب نجم',
                    'city_name_en' => 'Deirb Negm',
                ),
            319 =>
                array (
                    'id' => '320',
                    'governorate_id' => '20',
                    'city_name_ar' => 'كفر صقر',
                    'city_name_en' => 'Kafr Saqr',
                ),
            320 =>
                array (
                    'id' => '321',
                    'governorate_id' => '20',
                    'city_name_ar' => 'أولاد صقر',
                    'city_name_en' => 'Awlad Saqr',
                ),
            321 =>
                array (
                    'id' => '322',
                    'governorate_id' => '20',
                    'city_name_ar' => 'الحسينية',
                    'city_name_en' => 'Husseiniya',
                ),
            322 =>
                array (
                    'id' => '323',
                    'governorate_id' => '20',
                    'city_name_ar' => 'صان الحجر القبلية',
                    'city_name_en' => 'san alhajar alqablia',
                ),
            323 =>
                array (
                    'id' => '324',
                    'governorate_id' => '20',
                    'city_name_ar' => 'منشأة أبو عمر',
                    'city_name_en' => 'Manshayat Abu Omar',
                ),
            324 =>
                array (
                    'id' => '325',
                    'governorate_id' => '21',
                    'city_name_ar' => 'الطور',
                    'city_name_en' => 'Al Toor',
                ),
            325 =>
                array (
                    'id' => '326',
                    'governorate_id' => '21',
                    'city_name_ar' => 'شرم الشيخ',
                    'city_name_en' => 'Sharm El-Shaikh',
                ),
            326 =>
                array (
                    'id' => '327',
                    'governorate_id' => '21',
                    'city_name_ar' => 'دهب',
                    'city_name_en' => 'Dahab',
                ),
            327 =>
                array (
                    'id' => '328',
                    'governorate_id' => '21',
                    'city_name_ar' => 'نويبع',
                    'city_name_en' => 'Nuweiba',
                ),
            328 =>
                array (
                    'id' => '329',
                    'governorate_id' => '21',
                    'city_name_ar' => 'طابا',
                    'city_name_en' => 'Taba',
                ),
            329 =>
                array (
                    'id' => '330',
                    'governorate_id' => '21',
                    'city_name_ar' => 'سانت كاترين',
                    'city_name_en' => 'Saint Catherine',
                ),
            330 =>
                array (
                    'id' => '331',
                    'governorate_id' => '21',
                    'city_name_ar' => 'أبو رديس',
                    'city_name_en' => 'Abu Redis',
                ),
            331 =>
                array (
                    'id' => '332',
                    'governorate_id' => '21',
                    'city_name_ar' => 'أبو زنيمة',
                    'city_name_en' => 'Abu Zenaima',
                ),
            332 =>
                array (
                    'id' => '333',
                    'governorate_id' => '21',
                    'city_name_ar' => 'رأس سدر',
                    'city_name_en' => 'Ras Sidr',
                ),
            333 =>
                array (
                    'id' => '334',
                    'governorate_id' => '22',
                    'city_name_ar' => 'كفر الشيخ',
                    'city_name_en' => 'Kafr El Sheikh',
                ),
            334 =>
                array (
                    'id' => '335',
                    'governorate_id' => '22',
                    'city_name_ar' => 'وسط البلد كفر الشيخ',
                    'city_name_en' => 'Kafr El Sheikh Downtown',
                ),
            335 =>
                array (
                    'id' => '336',
                    'governorate_id' => '22',
                    'city_name_ar' => 'دسوق',
                    'city_name_en' => 'Desouq',
                ),
            336 =>
                array (
                    'id' => '337',
                    'governorate_id' => '22',
                    'city_name_ar' => 'فوه',
                    'city_name_en' => 'Fooh',
                ),
            337 =>
                array (
                    'id' => '338',
                    'governorate_id' => '22',
                    'city_name_ar' => 'مطوبس',
                    'city_name_en' => 'Metobas',
                ),
            338 =>
                array (
                    'id' => '339',
                    'governorate_id' => '22',
                    'city_name_ar' => 'برج البرلس',
                    'city_name_en' => 'Burg Al Burullus',
                ),
            339 =>
                array (
                    'id' => '340',
                    'governorate_id' => '22',
                    'city_name_ar' => 'بلطيم',
                    'city_name_en' => 'Baltim',
                ),
            340 =>
                array (
                    'id' => '341',
                    'governorate_id' => '22',
                    'city_name_ar' => 'مصيف بلطيم',
                    'city_name_en' => 'Masief Baltim',
                ),
            341 =>
                array (
                    'id' => '342',
                    'governorate_id' => '22',
                    'city_name_ar' => 'الحامول',
                    'city_name_en' => 'Hamol',
                ),
            342 =>
                array (
                    'id' => '343',
                    'governorate_id' => '22',
                    'city_name_ar' => 'بيلا',
                    'city_name_en' => 'Bella',
                ),
            343 =>
                array (
                    'id' => '344',
                    'governorate_id' => '22',
                    'city_name_ar' => 'الرياض',
                    'city_name_en' => 'Riyadh',
                ),
            344 =>
                array (
                    'id' => '345',
                    'governorate_id' => '22',
                    'city_name_ar' => 'سيدي سالم',
                    'city_name_en' => 'Sidi Salm',
                ),
            345 =>
                array (
                    'id' => '346',
                    'governorate_id' => '22',
                    'city_name_ar' => 'قلين',
                    'city_name_en' => 'Qellen',
                ),
            346 =>
                array (
                    'id' => '347',
                    'governorate_id' => '22',
                    'city_name_ar' => 'سيدي غازي',
                    'city_name_en' => 'Sidi Ghazi',
                ),
            347 =>
                array (
                    'id' => '348',
                    'governorate_id' => '23',
                    'city_name_ar' => 'مرسى مطروح',
                    'city_name_en' => 'Marsa Matrouh',
                ),
            348 =>
                array (
                    'id' => '349',
                    'governorate_id' => '23',
                    'city_name_ar' => 'الحمام',
                    'city_name_en' => 'El Hamam',
                ),
            349 =>
                array (
                    'id' => '350',
                    'governorate_id' => '23',
                    'city_name_ar' => 'العلمين',
                    'city_name_en' => 'Alamein',
                ),
            350 =>
                array (
                    'id' => '351',
                    'governorate_id' => '23',
                    'city_name_ar' => 'الضبعة',
                    'city_name_en' => 'Dabaa',
                ),
            351 =>
                array (
                    'id' => '352',
                    'governorate_id' => '23',
                    'city_name_ar' => 'النجيلة',
                    'city_name_en' => 'Al-Nagila',
                ),
            352 =>
                array (
                    'id' => '353',
                    'governorate_id' => '23',
                    'city_name_ar' => 'سيدي براني',
                    'city_name_en' => 'Sidi Brani',
                ),
            353 =>
                array (
                    'id' => '354',
                    'governorate_id' => '23',
                    'city_name_ar' => 'السلوم',
                    'city_name_en' => 'Salloum',
                ),
            354 =>
                array (
                    'id' => '355',
                    'governorate_id' => '23',
                    'city_name_ar' => 'سيوة',
                    'city_name_en' => 'Siwa',
                ),
            355 =>
                array (
                    'id' => '356',
                    'governorate_id' => '23',
                    'city_name_ar' => 'مارينا',
                    'city_name_en' => 'Marina',
                ),
            356 =>
                array (
                    'id' => '357',
                    'governorate_id' => '23',
                    'city_name_ar' => 'الساحل الشمالى',
                    'city_name_en' => 'North Coast',
                ),
            357 =>
                array (
                    'id' => '358',
                    'governorate_id' => '24',
                    'city_name_ar' => 'الأقصر',
                    'city_name_en' => 'Luxor',
                ),
            358 =>
                array (
                    'id' => '359',
                    'governorate_id' => '24',
                    'city_name_ar' => 'الأقصر الجديدة',
                    'city_name_en' => 'New Luxor',
                ),
            359 =>
                array (
                    'id' => '360',
                    'governorate_id' => '24',
                    'city_name_ar' => 'إسنا',
                    'city_name_en' => 'Esna',
                ),
            360 =>
                array (
                    'id' => '361',
                    'governorate_id' => '24',
                    'city_name_ar' => 'طيبة الجديدة',
                    'city_name_en' => 'New Tiba',
                ),
            361 =>
                array (
                    'id' => '362',
                    'governorate_id' => '24',
                    'city_name_ar' => 'الزينية',
                    'city_name_en' => 'Al ziynia',
                ),
            362 =>
                array (
                    'id' => '363',
                    'governorate_id' => '24',
                    'city_name_ar' => 'البياضية',
                    'city_name_en' => 'Al Bayadieh',
                ),
            363 =>
                array (
                    'id' => '364',
                    'governorate_id' => '24',
                    'city_name_ar' => 'القرنة',
                    'city_name_en' => 'Al Qarna',
                ),
            364 =>
                array (
                    'id' => '365',
                    'governorate_id' => '24',
                    'city_name_ar' => 'أرمنت',
                    'city_name_en' => 'Armant',
                ),
            365 =>
                array (
                    'id' => '366',
                    'governorate_id' => '24',
                    'city_name_ar' => 'الطود',
                    'city_name_en' => 'Al Tud',
                ),
            366 =>
                array (
                    'id' => '367',
                    'governorate_id' => '25',
                    'city_name_ar' => 'قنا',
                    'city_name_en' => 'Qena',
                ),
            367 =>
                array (
                    'id' => '368',
                    'governorate_id' => '25',
                    'city_name_ar' => 'قنا الجديدة',
                    'city_name_en' => 'New Qena',
                ),
            368 =>
                array (
                    'id' => '369',
                    'governorate_id' => '25',
                    'city_name_ar' => 'ابو طشت',
                    'city_name_en' => 'Abu Tesht',
                ),
            369 =>
                array (
                    'id' => '370',
                    'governorate_id' => '25',
                    'city_name_ar' => 'نجع حمادي',
                    'city_name_en' => 'Nag Hammadi',
                ),
            370 =>
                array (
                    'id' => '371',
                    'governorate_id' => '25',
                    'city_name_ar' => 'دشنا',
                    'city_name_en' => 'Deshna',
                ),
            371 =>
                array (
                    'id' => '372',
                    'governorate_id' => '25',
                    'city_name_ar' => 'الوقف',
                    'city_name_en' => 'Alwaqf',
                ),
            372 =>
                array (
                    'id' => '373',
                    'governorate_id' => '25',
                    'city_name_ar' => 'قفط',
                    'city_name_en' => 'Qaft',
                ),
            373 =>
                array (
                    'id' => '374',
                    'governorate_id' => '25',
                    'city_name_ar' => 'نقادة',
                    'city_name_en' => 'Naqada',
                ),
            374 =>
                array (
                    'id' => '375',
                    'governorate_id' => '25',
                    'city_name_ar' => 'فرشوط',
                    'city_name_en' => 'Farshout',
                ),
            375 =>
                array (
                    'id' => '376',
                    'governorate_id' => '25',
                    'city_name_ar' => 'قوص',
                    'city_name_en' => 'Quos',
                ),
            376 =>
                array (
                    'id' => '377',
                    'governorate_id' => '26',
                    'city_name_ar' => 'العريش',
                    'city_name_en' => 'Arish',
                ),
            377 =>
                array (
                    'id' => '378',
                    'governorate_id' => '26',
                    'city_name_ar' => 'الشيخ زويد',
                    'city_name_en' => 'Sheikh Zowaid',
                ),
            378 =>
                array (
                    'id' => '379',
                    'governorate_id' => '26',
                    'city_name_ar' => 'نخل',
                    'city_name_en' => 'Nakhl',
                ),
            379 =>
                array (
                    'id' => '380',
                    'governorate_id' => '26',
                    'city_name_ar' => 'رفح',
                    'city_name_en' => 'Rafah',
                ),
            380 =>
                array (
                    'id' => '381',
                    'governorate_id' => '26',
                    'city_name_ar' => 'بئر العبد',
                    'city_name_en' => 'Bir al-Abed',
                ),
            381 =>
                array (
                    'id' => '382',
                    'governorate_id' => '26',
                    'city_name_ar' => 'الحسنة',
                    'city_name_en' => 'Al Hasana',
                ),
            382 =>
                array (
                    'id' => '383',
                    'governorate_id' => '27',
                    'city_name_ar' => 'سوهاج',
                    'city_name_en' => 'Sohag',
                ),
            383 =>
                array (
                    'id' => '384',
                    'governorate_id' => '27',
                    'city_name_ar' => 'سوهاج الجديدة',
                    'city_name_en' => 'Sohag El Gedida',
                ),
            384 =>
                array (
                    'id' => '385',
                    'governorate_id' => '27',
                    'city_name_ar' => 'أخميم',
                    'city_name_en' => 'Akhmeem',
                ),
            385 =>
                array (
                    'id' => '386',
                    'governorate_id' => '27',
                    'city_name_ar' => 'أخميم الجديدة',
                    'city_name_en' => 'Akhmim El Gedida',
                ),
            386 =>
                array (
                    'id' => '387',
                    'governorate_id' => '27',
                    'city_name_ar' => 'البلينا',
                    'city_name_en' => 'Albalina',
                ),
            387 =>
                array (
                    'id' => '388',
                    'governorate_id' => '27',
                    'city_name_ar' => 'المراغة',
                    'city_name_en' => 'El Maragha',
                ),
            388 =>
                array (
                    'id' => '389',
                    'governorate_id' => '27',
                    'city_name_ar' => 'المنشأة',
                    'city_name_en' => 'almunsha\'a',
                ),
            389 =>
                array (
                    'id' => '390',
                    'governorate_id' => '27',
                    'city_name_ar' => 'دار السلام',
                    'city_name_en' => 'Dar AISalaam',
                ),
            390 =>
                array (
                    'id' => '391',
                    'governorate_id' => '27',
                    'city_name_ar' => 'جرجا',
                    'city_name_en' => 'Gerga',
                ),
            391 =>
                array (
                    'id' => '392',
                    'governorate_id' => '27',
                    'city_name_ar' => 'جهينة الغربية',
                    'city_name_en' => 'Jahina Al Gharbia',
                ),
            392 =>
                array (
                    'id' => '393',
                    'governorate_id' => '27',
                    'city_name_ar' => 'ساقلته',
                    'city_name_en' => 'Saqilatuh',
                ),
            393 =>
                array (
                    'id' => '394',
                    'governorate_id' => '27',
                    'city_name_ar' => 'طما',
                    'city_name_en' => 'Tama',
                ),
            394 =>
                array (
                    'id' => '395',
                    'governorate_id' => '27',
                    'city_name_ar' => 'طهطا',
                    'city_name_en' => 'Tahta',
                ),
            395 =>
                array (
                    'id' => '396',
                    'governorate_id' => '27',
                    'city_name_ar' => 'الكوثر',
                    'city_name_en' => 'Alkawthar',
                ),
        );

       foreach($cities as $city) {
           $c = City::create([
                'id' =>  $city->id,
               'governorate_id'  => $city->governorate_id,
               'city_name_ar'   => $city->city_name_ar,
               'city_name_en'   => $city->city_name_en,
           ]);
       }
    }
}
