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
                "title" => "OEM PlayStation 2 PS2 Clear Ocean Blue Controller DualShock 2 SCPH-10010",
                "price" => "29",
                "category_id" => "1",
                "description" => "Includes all the functions of digital joy-pad.
                12 Analog keys in 3D mode add variety and intelligence in operation.
                Support game, with two different Motors inside, produce two different vibration effects.",
                "image" => 'public\images\products\controller1.jpg'
            ],
            [
                "title" => "Sports LED Wrist Watch Silicone Rubber Digital Running Womens Mens Boys Girls",
                "price" => "2",
                "category_id" => "1",
                "description" => "The LED display time, month, day, seconds. Automatic calendar. Power saving mode.",
                "image" => 'public\images\products\s-l1600.jpg'
            ],
            [
                "title" => "USB-C Type C To 3.5mm Audio Aux Headphone Jack Cable Adapter",
                "price" => "1.95",
                "category_id" => "1",
                "description" => "High fidelity sound quality. Built in high-performance DAC chip",
                "image" => 'public\images\products\sa-l1600.jpg'
            ],
            [
                "title" => "2V 24V 4.2A Bus Dual USB Charging Socket Power Adapter Car USB Charger",
                "price" => "2.28",
                "category_id" => "1",
                "description" => "Universal Cigarette Lighter, USB Charger, Universal Mobile Phone",
                "image" => 'public\images\products\g-l1600.jpg'
            ],
            [
                "title" => "new women's clothing autumn slimming BC shiny handmade sequin linen silk knitwear hollow batwing sleeve shawl",
                "price" => "40.11",
                "category_id" => "4",
                "description" => "BCShiny sequin cutout shawl. The mesh is soft and ideal for delicate and elegant modeling.
                Exquisite material and mesh weaving combination.",
                "image" => 'public\images\products\s-l1600d.jpg'
            ],
            [
                "title" => "Run Vent Tech Grey/ Black Long Sleeve Shirt women's Sz Unknown sweater",
                "price" => "22.49",
                "category_id" => "4",
                "description" => "Polyester/cotton",
                "image" => 'public\images\products\as-l1600.jpg'
            ],
            [
                "title" => "Summer Mens Slim Fit T Shir",
                "price" => "3.29",
                "category_id" => "3",
                "description" => "Muscle Top Gym V Neck Short Sleeve Plain Tee Shirt",
                "image" => 'public\images\products\ts-jhgf.jpg'
            ],
            [
                "title" => "Elegant Mountain 925 Silver Filled Ring",
                "price" => "1.59",
                "category_id" => "3",
                "description" => "Women/Men Jewelry Party Ring Sz 6-10",
                "image" => 'public\images\products\s-lrng.jpg'
            ]
        ]);
    }
}
