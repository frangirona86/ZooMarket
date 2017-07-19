<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Ruta Home, Tiene que estar logueado
Route::get('/home', 'HomeController@index')->name('home');

// Creamos una ruta de tipo RESOURCE para los productos
Route::resource('/products', 'ProductController');

// Agregamos la ruta para el producto-categoria, al cual le pasamos el campo Slug, y lo llamamos con un Alias al final
Route::get('product/category/{slug}', 'ProductController@byCategory')->name('category-product');

// Creamos una ruta de tipo PRUEBA
Route::get('/header', 'ProductController@pruebaHeader');
