<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'link_fb' => 'https://www.facebook.com/FeyeriaDanceSportClub/',
                'link_insta' => 'https://www.instagram.com/mariupol_dancesport/',
                'address_ua' => 'СК Іллічівець, східна трибуна, проспект Нахімова, 53, ТСЦ Wave Маріуполь',
                'address_ru' => 'СК Ильичевец, восточная трибуна, проспект Нахимова, 53, ТСЦ Wave Мариуполь',
                'phone' => '+380985674170',
                'email' => 'nazarshashkov@gmail.com'
            ]
        ];
        DB::table('contacts')->insert($data);
    }
}
