<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product =[
            [
            
            'name' => 'burger',
            'image' => 'https://dummyimage.com/200x200/4D588E/fff&text=burger',
            'price' => 8000,
            'description' => 'Burger',
            
        ],
        [
            
            'name' => 'cilok',
            'image' => 'https://dummyimage.com/200x200/4D588E/fff&text=burger',
            'price' => 8000,
            'description' => 'Burger',
            
        ],
        [
            
            'name' => 'seblak',
            'image' => 'https://dummyimage.com/200x200/4D588E/fff&text=burger',
            'price' => 8000,
            'description' => 'Burger',
            
        ],
    ];

    foreach($product as $key => $value){
        Product::create($value);
    }
    }
}
