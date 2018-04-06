<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('admXY18');
        User::create([
        	'name' => 'Axel',
        	'email' => 'axel.aleman@correo.com',
        	'password' => $password
        ]);
    }
}
