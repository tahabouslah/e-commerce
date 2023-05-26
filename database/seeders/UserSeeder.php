<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //import the DB
use Illuminate\Support\Facades\Hash; //to encrypt the password

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            "name" => 'taha Bouslah',
            "email" => "bouslahtaha33@gmail.com",
            "password" => Hash::make("12345")
        ]);
    }
}
