<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Klaas",
            'email' => "klaas@sinter.nl",
            'password' => bcrypt("kado"),
        ]);

        DB::table('users')->insert([
            'name' => "Hans",
            'email' => "getze@flammenwerfer.de",
            'password' => bcrypt("getze"),
        ]);

        DB::table("users")->insert([
            'name' => "Thijs",
            'email' => "thijsweijers@outlook.com",
            'password' => bcrypt("nee")
        ]);
    }
}
