<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nombre_cliente' => 'John Doe',
            'cod_cliente' => 'abcd1234',
            'email' => 'contacto@cartaenqer.cl',
            'password' => bcrypt('password'), 
        ]);
        User::factory(20)->create();
    }
}
