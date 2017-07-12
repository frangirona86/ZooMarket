<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seeder de Usuarios
        $this->call(UsersTableSeeder::class);

        // Seeder de Productos
        $this->call(ProductsTableSeeder::class);
    }
}
