<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'id' => 1,
                'name' => 'Category 1',
                'image' => 'acc2.jpeg',
                'description' => 'Description for Category 1',
                'gender_id' => 1, 
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Category 2',
                'image' => 'acc3.jpeg',
                'description' => 'Description for Category 2',
                'gender_id' => 2,
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Category 3',
                'image' => 'acc4.jpeg',
                'description' => 'Description for Category 3',
                'gender_id' => 1, 
                'created_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Category 4',
                'image' => 'acc5.jpeg',
                'description' => 'Description for Category 4',
                'gender_id' => 2,
                'created_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'Category 5',
                'image' => 'acc3.jpeg',
                'description' => 'Description for Category 5',
                'gender_id' => 1, 
                'created_at' => now(),
            ],
            [
                'id' => 6,
                'name' => 'Category 6',
                'image' => 'acc2.jpeg',
                'description' => 'Description for Category 6',
                'gender_id' => 2,
                'created_at' => now(),
            ],
        ];
    
        DB::table('categories')->delete();
        DB::table('categories')->insert($categories);
    }
    
}
