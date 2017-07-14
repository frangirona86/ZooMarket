<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creamos un usuario con un mail fijo
        factory(User::class)->create([
            'email'      => 'infoleod@gmail.com',
            'password'   => bcrypt('123456'),
            'name'       => 'Leonardo',
            'surname'    =>' D\'Orto',
            'phone'      => '+541144085698'
        ]);

        // Creamos 10 usuarios mas con el factory
        factory(User::class, 10)->create();
    }
}
