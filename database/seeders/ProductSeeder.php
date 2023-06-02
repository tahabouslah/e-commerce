<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('_products__tabel')->insert([
           [
            "name"=> 'Samsung S9',
            "price"=> '2000',
            "category"=> 'Phones',
            "description"=> '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            "gallery"=> 'https://www.tunisianet.com.tn/93829-large/galaxy-s9-tunisie-prix.jpg'
           ],
           [
            "name"=> 'Redmi note 12',
            "price"=> '1200',
            "category"=> 'Phones',
            "description"=> '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            "gallery"=> 'https://zaarastore.tn/wp-content/uploads/2023/04/RedmiNote12Pro-8-768x609.jpg'
           ], [
            "name"=> 'Oppo',
            "price"=> '1200',
            "category"=> 'Phones',
            "description"=> '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            "gallery"=> 'https://zaarastore.tn/wp-content/uploads/2023/02/1.webp'
           ],
        ]);
    }
}
