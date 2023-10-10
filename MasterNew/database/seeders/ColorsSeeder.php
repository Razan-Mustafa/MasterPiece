<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $colors = [
            ['id' => 1 , 'name' => 'red','created_at' => now(),],
            ['id' => 2 , 'name' => 'blue','created_at' => now(),],
            ['id' => 3 , 'name' => 'green','created_at' => now(),],
            ['id' => 4 , 'name' => 'yellow','created_at' => now(),],
        ];
        
        DB::table('colors')->delete();
        DB::table('colors')->insert($colors);
    }

}
