<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Pastel de 3 Leches',
            'slug' => 'Pastel de 3 Leches',
            'details' => 'Pastel de 3 Leches',
            'price' => 400,
            'shipping_cost' => 29.99,
            'description' => 'No nada mas de una, de 3 leches',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'pastel3leches.jpg'
        ]);

        Product::create([
            'name' => 'Helado de Vainillia',
            'slug' => 'Helado de Vainilla',
            'details' => 'Helado de Vainilla',
            'price' => 49.99,
            'shipping_cost' => 19.99,
            'description' => 'Rico helado',
            'category_id' => 1,
            'brand_id' => 2,
            'image_path' => 'heladoVainilla.jpg'
        ]);

        Product::create([
            'name' => 'Gelatina',
            'slug' => 'Gelatina',
            'details' => 'Gelatina',
            'price' => 59.99,
            'shipping_cost' => 19.99,
            'description' => 'Rica Gelatina de Mosaico',
            'category_id' => 1,
            'brand_id' => 3,
            'image_path' => 'gelatina.jpg'
        ]);
        Product::create([
            'name' => 'Arroz con Leche',
            'slug' => 'Arroz con Leche',
            'details' => 'Arroz con Leche',
            'price' => 69.99,
            'shipping_cost' => 19.99,
            'description' => 'Delicioso Arroz con leche',
            'category_id' => 1,
            'brand_id' => 4,
            'image_path' => 'arroz.jpg'
        ]);

        Product::create([
            'name' => 'Flan',
            'slug' => 'Flan',
            'details' => 'Flan',
            'price' => 40.56,
            'shipping_cost' => 29.99,
            'description' => 'Flan Napolitano',
            'category_id' => 1,
            'brand_id' => 5,
            'image_path' => 'flan.jpg'
        ]);

        Product::create([
            'name' => 'Fresas con Crema',
            'slug' => 'Fresas con Crema',
            'details' => 'Fresas con Crema',
            'price' => 44.99,
            'shipping_cost' => 19.99,
            'description' => 'Ricas fresas con crema',
            'category_id' => 1,
            'brand_id' => 6,
            'image_path' => 'fresas.jpg'
        ]);

        Product::create([
            'name' => 'Pay de Queso',
            'slug' => 'Pay de Queso',
            'details' => 'Pay de Queso',
            'price' => 39.99,
            'shipping_cost' => 19.99,
            'description' => 'Rico Pay de queso',
            'category_id' => 1,
            'brand_id' => 7,
            'image_path' => 'pay.jpg'
        ]);
        Product::create([
            'name' => 'Pastel de Guayaba',
            'slug' => 'Pastel de Guayaba',
            'details' => 'Pastel de Guayaba',
            'price' => 119.99,
            'shipping_cost' => 19.99,
            'description' => 'Pastel de Guayaba',
            'category_id' => 1,
            'brand_id' => 8,
            'image_path' => 'pastelGuayaba.jpg'
        ]);
       
       
    }
}
