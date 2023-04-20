<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('menus')->insert([
            'icon' => 'fas',
            'title' => 'Pizza',
            'description' => 'Lorem jjjjj',
            'price' => '12.99',
        ]);
    }
}
