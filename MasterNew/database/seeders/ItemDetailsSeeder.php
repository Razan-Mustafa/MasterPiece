<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $itemDetails = [
            [
                'id' => 1,
                'name' => 'Product 1',
                'description' => 'Description for Product 1',
                'price' => 19.99,
                'category_id' => 1,
                'created_at' => now(),
                'img1' => 'pro1.PNG',
                'img2' => 'proA.PNG',
                'img3' => 'proB.PNG',
                'number_of_rente' => 15,
                
            ],
            [
                'id' => 2,
                'name' => 'Product 2',
                'description' => 'Description for Product 2',
                'price' => 29.99,                
                'category_id' => 2,
                'created_at' => now(),
                'img1' => 'pro2.PNG',
                'img2' => 'proA.PNG',
                'img3' => 'proB.PNG',
                'number_of_rente' => 15,
            ],
            [
                'id' => 3,
                'name' => 'Product 1',
                'description' => 'Description for Product 1',
                'price' => 19.99,
                'category_id' => 1,
                'created_at' => now(),
                'img1' => 'pro2.PNG',
                'img2' => 'proA.PNG',
                'img3' => 'proB.PNG',
                'number_of_rente' => 15,
            ],
            [
                'id' => 4,
                'name' => 'Product 2',
                'description' => 'Description for Product 2',
                'price' => 29.99,                
                'category_id' => 2,
                'created_at' => now(),
                'img1' => 'pro3.PNG',
                'img2' => 'proA.PNG',
                'img3' => 'proB.PNG',
                'number_of_rente' => 15,
            ],
            [
                'id' => 5,
                'name' => 'Product 1',
                'description' => 'Description for Product 1',
                'price' => 19.99,
                'category_id' => 1,
                'created_at' => now(),
                'img1' => 'pro4.PNG',
                'img2' => 'proA.PNG',
                'img3' => 'proB.PNG',
                'number_of_rente' => 5,
            ],
            [
                'id' => 6,
                'name' => 'Product 2',
                'description' => 'Description for Product 2',
                'price' => 29.99,                
                'category_id' => 2,
                'created_at' => now(),
                'img1' => 'pro5.PNG',
                'img2' => 'proA.PNG',
                'img3' => 'proB.PNG',
                'number_of_rente' => 5,
            ],
            [
                'id' => 7,
                'name' => 'Product 1',
                'description' => 'Description for Product 1',
                'price' => 19.99,
                'category_id' => 1,
                'created_at' => now(),
                'img1' => 'pro6.PNG',
                'img2' => 'proA.PNG',
                'img3' => 'proB.PNG',
                'number_of_rente' => 5,
            ],
            [
                'id' => 8,
                'name' => 'Product 2',
                'description' => 'Description for Product 2',
                'price' => 29.99,                
                'category_id' => 2,
                'created_at' => now(),
                'img1' => 'pro1.PNG',
                'img2' => 'proA.PNG',
                'img3' => 'proB.PNG',
                'number_of_rente' => 5,
            ],
            [
                'id' => 9,
                'name' => 'Product 1',
                'description' => 'Description for Product 1',
                'price' => 19.99,
                'category_id' => 1,
                'created_at' => now(),
                'img1' => 'pro2.PNG',
                'img2' => 'proA.PNG',
                'img3' => 'proB.PNG',
                'number_of_rente' => 5,
            ],
            [
                'id' => 10,
                'name' => 'Product 2',
                'description' => 'Description for Product 2',
                'price' => 29.99,                
                'category_id' => 2,
                'created_at' => now(),
                'img1' => 'pro2.PNG',
                'img2' => 'proA.PNG',
                'img3' => 'proB.PNG',
                'number_of_rente' => 15,
            ],
        ];

        DB::table('item_detailes')->delete();
        DB::table('item_detailes')->insert($itemDetails);
    }
    
}
