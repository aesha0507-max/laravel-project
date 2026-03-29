<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 181; $i++) {

            if ($i <= 16) {
                $image = 'audio/' . $i . '.jpg';
                $category = 'Audio';
                $name = 'Wireless Headphones';
            } elseif ($i <= 44) {
                $image = 'bags/' . ($i - 16) . '.jpg';
                $category = 'Bags';
                $name = 'Luxury Handbag';
            } elseif ($i <= 56) {
                $image = 'shoes/' . ($i - 44) . '.jpg';
                $category = 'Shoes';
                $name = 'Running Shoes';
            } elseif ($i <= 71) {
                $image = 'boots/' . ($i - 56) . '.jpg';
                $category = 'Boots';
                $name = 'Stylish Boots';
            } elseif ($i <= 86) {
                $image = 'clothing/' . ($i - 71) . '.jpg';
                $category = 'Clothing';
                $name = 'Elegant Dress';
            } elseif ($i <= 95) {
                $image = 'earrings/' . ($i - 86) . '.jpg';
                $category = 'Earrings';
                $name = 'Gold Earrings';
            } elseif ($i <= 102) {
                $image = 'laptop/' . ($i - 95) . '.jpg';
                $category = 'Laptop';
                $name = 'Gaming Laptop';
            } elseif ($i <= 118) {
                $image = 'makeup/' . ($i - 102) . '.jpg';
                $category = 'Makeup';
                $name = 'Makeup Kit';
            } elseif ($i <= 138) {
                $image = 'necklace/' . ($i - 118) . '.jpg';
                $category = 'Necklace';
                $name = 'Neck Necklace';
            } elseif ($i <= 141) {
                $image = 'perfume/' . ($i - 138) . '.jpg';
                $category = 'Perfume';
                $name = 'Luxury Perfume';
            } elseif ($i <= 154) {
                $image = 'ring/' . ($i - 141) . '.jpg';
                $category = 'Ring';
                $name = 'Elegant Ring';
            } elseif ($i <= 164) {
                $image = 'skincare/' . ($i - 154) . '.jpg';
                $category = 'SkinCare';
                $name = 'Skin Care Product';
            } elseif ($i <= 169) {

                $image = 'smart_watches/' . ($i - 164) . '.jpg';
                $category = 'Smart Watch';
                $name = 'Smart Watch';
            } else {

                $image = 'old_watches/' . ($i - 169) . '.jpg';
                $category = 'Old Watch';
                $name = 'Classic Watch';
            }

            switch ($category) {

                case 'Laptop':
                    $price = rand(10000, 50000);
                    break;

                case 'Smart Watch':
                    $price = rand(800, 3000);
                    break;

                case 'Old Watch':
                    $price = rand(1000, 8000);
                    break;

                case 'Audio':
                    $price = rand(150, 800);
                    break;

                case 'Shoes':
                case 'Boots':
                    $price = rand(600, 1200);
                    break;

                case 'Bags':
                    $price = rand(500, 1500);
                    break;

                case 'Clothing':
                    $price = rand(400, 700);
                    break;

                case 'Makeup':
                case 'SkinCare':
                    $price = rand(100, 700);
                    break;

                case 'Earrings':
                case 'Necklace':
                case 'Ring':
                    $price = rand(200, 3000);
                    break;

                case 'Perfume':
                    $price = rand(300, 2000);
                    break;

                default:
                    $price = rand(100, 500);
            }

            Product::create([
                'name' => $name . ' ' . $i,
                'price' => $price,
                'category' => $category,
                'description' => $faker->realText(80),
                'image' => $image
            ]);
        }
    }
}
