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
        $products = [
            [
                'item_id' => 1, 
                'color_id' => 1, 
                'size_id' => 1,  
                'quantity' => 12,  
                'created_at' => now(),

            ],
            [
                'item_id' => 2, 
                'color_id' => 2, 
                'size_id' => 2, 
                'quantity' => 12,
                'created_at' => now(),

            ],
            [
                'item_id' => 3, 
                'color_id' => 3, 
                'size_id' => 1,  
                'quantity' => 12,
                'created_at' => now(),

            ],
            [
                'item_id' => 4, 
                'color_id' => 4, 
                'size_id' => 2, 
                'quantity' => 12,
                'created_at' => now(),

            ],
            [
                'item_id' => 5, 
                'color_id' => 2, 
                'size_id' => 1,  
                'quantity' => 12,
                'created_at' => now(),

            ],
            [
                'item_id' => 6, 
                'color_id' => 4, 
                'size_id' => 2, 
                'quantity' => 12,
                'created_at' => now(),

            ],
            [
                'item_id' => 7, 
                'color_id' => 1, 
                'size_id' => 1,  
                'quantity' => 12,
                'created_at' => now(),

            ],
            [
                'item_id' => 8, 
                'color_id' => 2, 
                'size_id' => 2, 
                'quantity' => 12,
                'created_at' => now(),

            ],
            [
                'item_id' => 9, 
                'color_id' => 1, 
                'size_id' => 1,  
                'quantity' => 12,
                'created_at' => now(),

            ],
            [
                'item_id' => 10, 
                'color_id' => 2, 
                'size_id' => 2, 
                'quantity' => 12,
                'created_at' => now(),

            ],
            [
                'item_id' => 1, 
                'color_id' => 1, 
                'size_id' => 1,  
                'quantity' => 12,
                'created_at' => now(),

            ],
            [
                'item_id' => 2, 
                'color_id' => 2, 
                'size_id' => 2, 
                'quantity' => 12,
                'created_at' => now(),

            ],
            [
                'item_id' => 3, 
                'color_id' => 3, 
                'size_id' => 1,  
                'quantity' => 12,
                'created_at' => now(),

            ],
            [
                'item_id' => 4, 
                'color_id' => 4, 
                'size_id' => 2, 
                'quantity' => 12,
                'created_at' => now(),

            ],
            [
                'item_id' => 5, 
                'color_id' => 2, 
                'size_id' => 1,  
                'quantity' => 12,
                'created_at' => now(),

            ],
            [
                'item_id' => 6, 
                'color_id' => 4, 
                'size_id' => 2, 
                'quantity' => 12,
                'created_at' => now(),

            ],
            [
                'item_id' => 7, 
                'color_id' => 1, 
                'size_id' => 1,  
                'quantity' => 12,
                'created_at' => now(),

            ],
            [
                'item_id' => 8, 
                'color_id' => 2, 
                'size_id' => 2, 
                'quantity' => 12,
                'created_at' => now(),

            ],
            [
                'item_id' => 9, 
                'color_id' => 1, 
                'size_id' => 1,  
                'quantity' => 12,
                'created_at' => now(),

            ],
            [
                'item_id' => 10, 
                'color_id' => 2, 
                'size_id' => 2, 
                'quantity' => 12,
                'created_at' => now(),

            ],
        

        ];

        DB::table('products')->delete();
        DB::table('products')->insert($products);
    }
    
}
