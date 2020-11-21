<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            "name"=>"Samsung TV",
            "price"=>"200",
            "description"=>"lorem ipsum dolorlorem ipsum dolor lorem ipsum dolor lorem ipsum dolor",
            "category"=>"TV",
            "gallery"=>"https://www.lg.com/id/images/tv/MD06125938/gallery/large01_V01.jpg" 
            ],

            [
            "name"=>"LG V30",
            "price"=>"150",
            "description"=>"lorem ipsum dolorlorem ipsum dolor lorem ipsum dolor lorem ipsum dolor",
            "category"=>"Smartphone",
            "gallery"=>"https://www.lg.com/id/images/mobile/md05907276/gallery/N01_V30_Black_20171208_Desktop01.jpg" 
            ],

            [
            "name"=>"Panasonic TV",
            "price"=>"400",
            "description"=>"lorem ipsum dolorlorem ipsum dolor lorem ipsum dolor lorem ipsum dolor",
            "category"=>"TV",
            "gallery"=>"https://www.lg.com/id/images/tv/MD06125938/gallery/large01_V01.jpg" 
            ],

            [
                "name"=>"Sony",
                "price"=>"170",
                "description"=>"lorem ipsum dolorlorem ipsum dolor lorem ipsum dolor lorem ipsum dolor",
                "category"=>"Smartphone",
                "gallery"=>"https://www.lg.com/id/images/mobile/md05907276/gallery/N01_V30_Black_20171208_Desktop01.jpg" 
                ],
    ]);
    }
}
