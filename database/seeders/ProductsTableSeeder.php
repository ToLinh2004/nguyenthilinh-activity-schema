<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $products=[
            ['name' =>'pen','price'=>100,'description'=>'Adorable'],
            ['name' =>'book','price'=>300,'description'=>'Adorable'],
            ['name' =>'Book','price'=>300,'description'=>'Adorable'],
            ['name' =>'water','price'=>400,'description'=>'Adorable'],
            ['name' =>'TV','price'=>500,'description'=>'Adorable'],
        ];
        foreach($products as $product){
            Product::create($product);
        }

    }
}
