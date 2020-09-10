<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CoachSeeder extends Seeder
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
                'path_image' => 'images/coaches/NazarShashkov.jpg',
                'name_ua' => 'Назар Шашков',
                'name_ru' => 'Назар Шашков',
                'description_ua' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country',
                'description_ru' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country',
                'link_fb' => 'https://www.facebook.com/nazar.shashkov',
                'link_insta' => '',
                'is_show' => true
            ],
            [
                'path_image' => '"images/coaches/AnnaShashaeva.jpg',
                'name_ua' => 'Ганна Шашаєва',
                'name_ru' => 'Анна Шашаева',
                'description_ua' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country',
                'description_ru' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country',
                'link_fb' => '',
                'link_insta' => 'https://www.instagram.com/a_shashaeva',
                'is_show' => true
            ],
            [
                'path_image' => 'images/coaches/GeorgiyLomakin.jpg',
                'name_ua' => 'Георгій Ломакін',
                'name_ru' => 'Георгий Ломакин',
                'description_ua' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country',
                'description_ru' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country',
                'link_fb' => 'https://ru-ru.facebook.com/people/%D0%93%D0%B5%D0%BE%D1%80%D0%B3%D0%B8%D0%B9-%D0%9B%D0%BE%D0%BC%D0%B0%D0%BA%D0%B8%D0%BD/100023192010467',
                'link_insta' => '',
                'is_show' => true
            ],
            [
                'path_image' => 'images/coaches/EkaterinaZaika.jpg',
                'name_ua' => 'Катерина Заіка',
                'name_ru' => 'Екатерина Заика',
                'description_ua' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country',
                'description_ru' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country',
                'link_fb' => '',
                'link_insta' => 'https://www.instagram.com/ket.dance_mrpl',
                'is_show' => true
            ],
            [
                'path_image' => 'images/coaches/IrinaPerchenko.jpg',
                'name_ua' => 'Iрина Перченко',
                'name_ru' => 'Ирина Перченко',
                'description_ua' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country',
                'description_ru' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country',
                'link_fb' => '',
                'link_insta' => 'https://www.instagram.com/v.l.s.v07',
                'is_show' => true
            ],
            [
                'path_image' => 'images/coaches/OlgaSmolina.jpg',
                'name_ua' => 'Ольга Смолiна',
                'name_ru' => 'Ольга Смолина',
                'description_ua' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country',
                'description_ru' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country',
                'link_fb' => '',
                'link_insta' => 'https://www.instagram.com/smolina_olga_',
                'is_show' => true
            ]
        ];
        DB::table('coaches')->insert($data);
    }
}
