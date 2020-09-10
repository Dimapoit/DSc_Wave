<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class LogoSeeder extends Seeder
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
                'path_image' => 'images/logo/audsf.png',
                'link_logo' => 'https://audsf.com.ua/news/',
                'is_show' => true
            ],
            [
                'path_image' => 'images/logo/scu.png',
                'link_logo' => 'https://scu.org.ua/',
                'is_show' => true
            ],
            [
                'path_image' => 'images/logo/noc.png',
                'link_logo' => 'http://noc-ukr.org/',
                'is_show' => true
            ],
            [
                'path_image' => 'images/logo/mincult.png',
                'link_logo' => 'https://mkip.gov.ua/ru/',
                'is_show' => true
            ],
            [
                'path_image' => 'images/logo/wdsf.png',
                'link_logo' => 'https://www.worlddancesport.org/',
                'is_show' => true
            ],
            [
                'path_image' => 'images/logo/msport.png',
                'link_logo' => 'https://www.facebook.com/msportukraine/',
                'is_show' => true
            ]
        ];
        DB::table('logos')->insert($data);
    }
}
