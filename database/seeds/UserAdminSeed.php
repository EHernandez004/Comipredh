<?php

use Illuminate\Database\Seeder;
use App\User;

class UserAdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Luis Arturo',
            'apellidos' => 'Rodriguez',
            'telefono' => '12345678',
            'rol' => true,
            'email' => 'comipredh@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        //
    }
}
