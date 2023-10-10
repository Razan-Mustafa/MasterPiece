<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $genders = [
            ['name' => 'Male' , 'id' => 2,'created_at' => now(),],
            ['name' => 'Female' , 'id' => 1,'created_at' => now(),],
        ];

        DB::table('genders')->delete();
        DB::table('genders')->insert($genders);
    
    }
}
