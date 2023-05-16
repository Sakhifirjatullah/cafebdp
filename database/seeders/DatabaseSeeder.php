<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Product::create([
            "name" => "Basreng" ,
            "image" => "https://www.resepkekinian.com/wp-content/uploads/2021/04/Bakso-Goreng-Kopong.jpg",
            "price" => "1000",
            "description" => "basreng teteh teteh"
        ]);
        \App\Models\Product::create([
            "name" => "Seblak" ,
            "image" => "https://images.tokopedia.net/img/cache/700/VqbcmM/2022/9/14/7e7aa484-f59f-44b4-8c09-32fced83b0c4.jpg",
            "price" => "12000",
            "description" => "seblak kacang"
        ]);
        \App\Models\Product::create([
            "name" => "Mie Ayam" ,
            "image" => "https://i0.wp.com/rasabunda.com/wp-content/uploads/2021/07/Mie-Yamin-Bandung.jpg?fit=480%2C600&ssl=1",
            "price" => "12000",
            "description" => "mie ayam dengan ayam spesial rasa sapi"
        ]);
        \App\Models\Product::create([
            "name" => "Piscok" ,
            "image" => "https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1634025439/018137f142b534c51ddde5e7d3bf87b5.jpg",
            "price" => "2000",
            "description" => "piscok enak dan enak"
        ]);
      
    }
}
