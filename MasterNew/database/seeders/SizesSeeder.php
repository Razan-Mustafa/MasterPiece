<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sizes = [
            ['id' => 1 , 'name' => 'S','created_at' => now(),],
            ['id' => 2 , 'name' => 'M','created_at' => now(),],
            ['id' => 3 , 'name' => 'L','created_at' => now(),],
            ['id' => 4 , 'name' => 'XL','created_at' => now(),],
        ];

        DB::table('sizes')->delete();
        DB::table('sizes')->insert($sizes);
    }
}
