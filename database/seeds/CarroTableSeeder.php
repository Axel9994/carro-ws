<?php

use Illuminate\Database\Seeder;
use App\Carro;

class CarroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carro::create([
        	'marca' => 'Honda',
        	'modelo' => 'Accord',
        	'año' => 2018,
        	'cilindrada' => 2500,
        	'tipo_combustible' => 'Gasolina'
        ]);
        Carro::create([
        	'marca' => 'Honda',
        	'modelo' => 'Accord',
        	'año' => 2018,
        	'cilindrada' => 3500,
        	'tipo_combustible' => 'Gasolina'
        ]);
        Carro::create([
        	'marca' => 'Honda',
        	'modelo' => 'Civic',
        	'año' => 2018,
        	'cilindrada' => 1800,
        	'tipo_combustible' => 'Gasolina'
        ]);
        Carro::create([
        	'marca' => 'Honda',
        	'modelo' => 'Civic Type R',
        	'año' => 2018,
        	'cilindrada' => 2500,
        	'tipo_combustible' => 'Gasolina'
        ]);
        Carro::create([
        	'marca' => 'Honda',
        	'modelo' => 'City',
        	'año' => 2018,
        	'cilindrada' => 1500,
        	'tipo_combustible' => 'Gasolina'
        ]);
        Carro::create([
        	'marca' => 'BMW',
        	'modelo' => '525d',
        	'año' => 2018,
        	'cilindrada' => 2500,
        	'tipo_combustible' => 'Diesel'
        ]);
    }
}
