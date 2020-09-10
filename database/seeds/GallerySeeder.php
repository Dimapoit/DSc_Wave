<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class GallerySeeder extends Seeder
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
                'path_image' => 'images/gallery/gallery_1.jpg',
                'is_show' => true
            ],
            [
                'path_image' => 'images/gallery/gallery_2.jpg',
                'is_show' => true
            ],
            [
                'path_image' => 'images/gallery/gallery_3.jpg',
                'is_show' => true
            ],
            [
                'path_image' => 'images/gallery/gallery_4.jpg',
                'is_show' => true
            ],
            [
                'path_image' => 'images/gallery/gallery_5.jpg',
                'is_show' => true
            ],
            [
                'path_image' => 'images/gallery/gallery_6.jpg',
                'is_show' => true
            ],
            [
                'path_image' => 'images/gallery/gallery_7.jpg',
                'is_show' => true
            ],
            [
                'path_image' => 'images/gallery/gallery_8.jpg',
                'is_show' => true
            ],
            [
                'path_image' => 'images/gallery/gallery_9.jpg',
                'is_show' => true
            ],
            [
                'path_image' => 'images/gallery/gallery_10.jpg',
                'is_show' => true
            ],
            [
                'path_image' => 'images/gallery/gallery_11.jpg',
                'is_show' => true
            ],
            [
                'path_image' => 'images/gallery/gallery_12.jpg',
                'is_show' => true
            ],
            [
                'path_image' => 'images/gallery/gallery_13.jpg',
                'is_show' => true
            ],
            [
                'path_image' => 'images/gallery/gallery_14.jpg',
                'is_show' => true
            ],
            [
                'path_image' => 'images/gallery/gallery_15.jpg',
                'is_show' => true
            ]
        ];
        DB::table('galleries')->insert($data);
    }
}
