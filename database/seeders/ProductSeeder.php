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
        DB::table('products')->insert([
//          [
//              'name'=>'OnePlus',
//              'price'=>'$400',
//              'description'=>'256gb internal memory, 8gb ram and with many more features',
//              'category'=>'Mobile',
//              'gallery'=>'https://unsplash.com/photos/CjUlnvc33YM'
//          ],
//            [
//                'name'=>'Samsung',
//                'price'=>'$900',
//                'description'=>'Note9 with many more features',
//                'category'=>'Mobile',
//                'gallery'=>'https://unsplash.com/photos/qaebAQHof70'
//            ],
//            [
//                'name'=>'Hp',
//                'price'=>'$1000',
//                'description'=>'With 8gb ram and 1tb hard drive and with many more features',
//                'category'=>'Laptop',
//                'gallery'=>'https://unsplash.com/photos/DkaEkeK81KU'
//            ],
//            [
//                'name'=>'Smart Watch',
//                'price'=>'$800',
//                'description'=>'Complete smart phone in a watch',
//                'category'=>'Gadgets',
//                'gallery'=>'https://unsplash.com/photos/vVmfi-yhCsc'
//            ]
                'name'=>'Smart Watch',
                'price'=>'$800',
                'description'=>'Complete smart phone in a watch',
                'category'=>'Gadgets',
               'gallery'=>'C:\Users\SMRizvi\OneDrive\Desktop\WordPress\unnamed.jpg'
        ]);
    }
}
