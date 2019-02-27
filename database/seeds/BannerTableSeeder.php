<?php

use Illuminate\Database\Seeder;
use App\Banner;

class BannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Banner::create([
        	'image'=>'image1',
        	'desc'=>'image1',
        	'category'=>'carousel',
        	'user_id'=>1
        ]);

        Banner::create([
        	'image'=>'image2',
        	'desc'=>'image2',
        	'category'=>'carousel',
        	'user_id'=>1
        ]);

        Banner::create([
        	'image'=>'image3',
        	'desc'=>'image3',
        	'category'=>'carousel',
        	'user_id'=>1
        ]);

        Banner::create([
        	'image'=>'image4',
        	'desc'=>'image4',
        	'category'=>'banner1',
        	'user_id'=>1
        ]);

        Banner::create([
        	'image'=>'image5',
        	'desc'=>'image5',
        	'category'=>'banner2',
        	'user_id'=>1
        ]);

        Banner::create([
        	'image'=>'image6',
        	'desc'=>'image6',
        	'category'=>'footer',
        	'user_id'=>1
        ]);
    }
}
