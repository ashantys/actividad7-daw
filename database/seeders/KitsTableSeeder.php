<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class KitsTableSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('kits')->insert([
            'nombre' => 'Starter Kit',
            
        ]);

        DB::table('kits')->insert([
            'nombre' => 'Educational Robotics Kit',
        ]);

        DB::table('kits')->insert([
            'nombre' => 'Kit5',
        ]);
    }
}
