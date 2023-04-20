<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('homes')->insert([
            'icon' => 'fa-pizza-slice',
            'title' => 'Order',
        ]);
        DB::table('homes')->insert([
            'icon' => 'fa-truck',
            'title' => 'Delivery',
        ]);
        DB::table('homes')->insert([
            'icon' => 'fa-hand-holding-dollar',
            'title' => 'Payment',
        ]);
        DB::table('homes')->insert([
            'icon' => 'fa-headset',
            'title' => '24/7 service',
        ]);
    }
}
