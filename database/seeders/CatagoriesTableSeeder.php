<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CatagoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catagories')->insert([
            "name" => "Consoles",
        ]);

        DB::table('catagories')->insert([
            "name" => "Telephones",
        ]);
    }
}
