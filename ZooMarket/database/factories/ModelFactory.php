<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


// Creamos un model factory para los Productos
$factory->define(App\Product::class, function (Faker\Generator $faker) {
    // Guardamos el faker del nombre asi lo usamos luego dentro de la funcion
    $title = $faker->name;
    // Devolvemos el faker de los datos
    return [
        'title' => $title,
        'slug' => str_slug($title),
        'description' => implode(' ', $faker->paragraphs(5)),
        'price' => rand(100,2000),
        'image' => 'https://dummyimage.com/50x50/000/fff.jpg'
    ];
});
