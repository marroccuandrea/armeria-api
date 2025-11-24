<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Beretta 92F',
            'category' => 'Pistole',
            'caliber' => '9mm',
            'description' => 'Description 1',
            'price' => 100,
            'image_path' => 'image_path 1',
            'is_available' => true,
        ]);
        Product::create([
            'name' => 'AK 47',
            'category' => 'Fucile d`assalto',
            'caliber' => '5.45mm',
            'description' => 'Description 1',
            'price' => 150,
            'image_path' => 'image_path 1',
            'is_available' => true,
        ]);
    }
}
