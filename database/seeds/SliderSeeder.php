<?php

use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
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
                'path_image' => 'images/slider/wave_1.jpg',
                'title_big' => 'focus on the next wave',
                'title_small' => 'Be One Of Us',
                'is_show' => true
            ],
            [
                'path_image' => 'images/slider/wave_2.jpg',
                'title_big' => 'Challenge Yourself',
                'title_small' => 'Be One Of Us',
                'is_show' => true
            ],
            [
                'path_image' => 'images/slider/wave_3.jpg',
                'title_big' => 'Life\'s a wave, catch it...',
                'title_small' => 'Be One Of Us',
                'is_show' => true
            ]
        ];
        DB::table('sliders')->insert($data);
    }
}
