<?php

namespace IMC\Calculator\Database\Seeders;

use Illuminate\Database\Seeder;
use IMC\Calculator\Models\BmiCategory;

class IMCSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        BmiCategory::create([
            'title'             => 'Magreza',
            'start_interval'    =>  '0',
            'end_interval'      =>  '18.5'
        ]);

        BmiCategory::create([
            'title'             => 'Normal',
            'start_interval'    =>  '18.5',
            'end_interval'      =>  '24.9'
        ]);

        BmiCategory::create([
            'title'             => 'Sobrepeso',
            'start_interval'    =>  '24.9',
            'end_interval'      =>  '30'
        ]);

        BmiCategory::create([
            'title'             => 'Obesidade',
            'start_interval'    =>  '30',
            'end_interval'      =>  '100'
        ]);
    }
}
