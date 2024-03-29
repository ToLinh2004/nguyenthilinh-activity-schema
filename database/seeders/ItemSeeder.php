<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $items=[
            ['name' =>'pen','price'=>100],
            ['name' =>'book','price'=>300],
            ['name' =>'water','price'=>400],
            ['name' =>'TV','price'=>500]

        ];
        foreach($items as $item){
            Item::create($item);
        }
    }
}
