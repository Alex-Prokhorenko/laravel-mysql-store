<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        [
            "title" => "Mens Heavy Fleece Lined Sherpa Hoodie Plaid Flannel Jacket Hood Coat Sweatshirt",
            "price" => "36.71",
            "category_id" => "3",
            "description" => "great jacket for every day",
            "image" => "resources\images\jacket1.jpg"],
        [
            "title" => "Men's Ripped Skinny Jeans Stretch Trousers Casual Slim Daily Chic Denim Pants",
            "price" => "26.99",
            "category_id" => "3",
            "description" => "stylish black joggers jeans",
            "image" => "resources\images\jeans1.jpg"],
        [
            "title" => "Women's Summer Dress Casual Belt Vintage Retro 50s Short Sleeve Dotted",
            "price" => "19.90",
            "category_id" => "4",
            "description" => "cute women black white dotted dress",
            "image" => "resources\images\dress1.jpg"
        ],
        [
            "title" => "Men's Retro Stainless Steel Vintage Crystal Rhinestone Army Military Rings",
            "price" => "3.29",
            "category_id" => "2",
            "description" => "cool men silver ring",
            "image" => 'resources\images\ring1.jpg'
        ],
    ]);
    }
}
