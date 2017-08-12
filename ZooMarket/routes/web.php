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
Route::get('/profile', 'HomeController@index')->name('profile');

// Creamos una ruta de tipo RESOURCE para los productos
Route::resource('/products', 'ProductController');

// Agregamos la ruta para el producto-categoria, al cual le pasamos el campo Slug, y lo llamamos con un Alias al final
Route::get('product/category/{slug}', 'ProductController@byCategory')->name('category-product');

// Agregamos la ruta para el producto-categoria, al cual le pasamos el campo Slug, y lo llamamos con un Alias al final
Route::get('product/show/{id}', 'ItemController@show')->name('show-product');

// Agregamos la ruta para el producto-categoria, al cual le pasamos el campo Slug, y lo llamamos con un Alias al final
Route::get('product-create/', 'ItemController@create');
Route::get('product-edit/{id}', 'ItemController@edit')->name('edit-product');
Route::post('product-update/{id}', 'ItemController@update');
Route::get('product-destroy/{productId},{idUser}', 'ItemController@destroy')->name('product-destroy');

//Se crea la ruta directa a la vista de Preguntas Frecuentes
Route::get('/faq', function () {
    return view('faq/faq');
});
