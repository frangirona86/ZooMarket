<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\User;
// use App\Category;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Traigo todos los usuarios
        $users = User::all();

        // Traigo todas las categorias
        // $categories = Category::all();

        // Recorro los usuarios y por cada usuario recorro las categorias e inserto un producto
        // Recorremos los usuarios
        // $users->each(function($user) use($categories) {
        $users->each(function($user) {
            //Recoremos las categorias
            // $categories->each(function($category) use($user) {
                factory(Product::class)->create([
                    'user_id' => $user->id
                    // 'category_id' => $category->id
                ]);
            // });
        });
    }
}
