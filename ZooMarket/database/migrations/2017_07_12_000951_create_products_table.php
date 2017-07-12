<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('slug');
            $table->text('description');
            $table->integer('price')->unsigned();                                 // Guardamos el precio como un numero entero sin decimal y sin signo
            $table->text('image');
            $table->integer('quant_sold')->unsigned()->nullable();                            // Guardamos la cantidad de productos que se vendieron
            $table->integer('user_id')->unsigned();                               // Guardamos el id de usuario y sin signo
            $table->foreign('user_id')->references('id')->on('users');            // Creamos la relacion con la tabla de usuarios
            $table->integer('category_id')->unsigned();                           // Guardamos el id de usuario y sin signo
            $table->foreign('category_id')->references('id')->on('categories');   // Creamos la relacion con la tabla de usuarios
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
