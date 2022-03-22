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
        DB::table('product')->insert([
            [
                'name'  => "LG mobile",
                'price' => "200",
                'description' => "A smartphone with 4gb RAM and much more features",
                'category' => "mobile",
                'gallery' => "https://img.ktc.ua/img/base/1/0/93660.jpg"
            ],
            [
                'name'  => "Oppo mobile",
                'price' => "300",
                'description' => "A smartphone with 8gb RAM and much more features",
                'category' => "mobile",
                'gallery' => "https://pricesm.com/uploads/product/oppo_f5_gold-8d83000b91612b471ec55668978d33c5.jpeg"
            ],
            [
                'name'  => "Panasonic TV",
                'price' => "400",
                'description' => "A smart TV with much more features",
                'category' => "TV",
                'gallery' => "https://303421.selcdn.ru/soel-upload/clouds/1/iblock/546/5469d7f84370423ce5894e5a285be9dc/459442.jpg"
            ],
            [
                'name'  => "Sony TV",
                'price' => "500",
                'description' => "A TV with much more features",
                'category' => "TV",
                'gallery' => "https://www.gannett-cdn.com/presto/2019/01/10/USAT/92814021-0d23-4992-85c6-06bcd2ed079c-Sony_Z9G_TV.jpg"
            ],
            [
                'name'  => "LG fridge",
                'price' => "250",
                'description' => "A fridge with much more features",
                'category' => "fridge",
                'gallery' => "https://www.mediaav.ru/upload/iblock/6d3/6d3992a9bbbc6b399c944a0a8e7c4b4d.jpg"
            ]
        ]);
    }
}
