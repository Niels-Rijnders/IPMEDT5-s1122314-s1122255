<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images_array = ['beer.jpg', 'sake.png', 'sushi_1.jpg', 'sushi_2.jpg', 'sushi_3.jpg', 'sushi_4.jpg', 'sushi_default.png', 'wine.jpg'];
        foreach($images_array as $image){
            DB::table('images')->insert([
                'image' => '/img/' . $image
            ]);
        }
    }
}
