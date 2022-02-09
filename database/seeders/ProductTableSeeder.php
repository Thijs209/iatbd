<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            "name" => "playstation 4",
            "category" => "Consoles",
            "user_id" => 1,
            "description" => "Slechte console"
        ]);
        
        DB::table('products')->insert([
            "name" => "playstation 5",
            "category" => "Consoles",
            "user_id" => 2,
            "description" => "goeiere console"
        ]);

        DB::table('products')->insert([
            "name" => "Iphone 11",
            "category" => "Telephones",
            "user_id" => 1,
            "description" => "is duur"
        ]);
        
        DB::table('products')->insert([
            "name" => "Galaxy s11",
            "category" => "Telephones",
            "user_id" => 1,
        ]);
    }
}
