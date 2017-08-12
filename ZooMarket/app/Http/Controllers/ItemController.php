<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.store');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('product.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Traemos el producto por medio del id
        $product = Product::where('id', $id)->first();
        // Guardamos el tipo de formulario, si es Show, Edit o Delete
        $typeOfOperation = 'show';
        // los retornamos a la vista SHOW dentro de la carpeta PRODUCTS el elemento
        return view('product.show', compact('product','typeOfOperation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      // Traemos el producto por medio del id
      $product = Product::where('id', $id)->first();
      // los retornamos a la vista edit dentro de la carpeta PRODUCTS el elemento
      return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update($id)
    public function update(Request $request, $id)
    {
      $product = Product::find($id);

      $product->title = $request->title;
      $product->price = $request->price *100;
      $product->description = $request->description;

      $product->save();

      return redirect('profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($productId,$idUser)
    {
      $product = Product::find($productId);
      $product->delete();
      return redirect('profile');
    }
}
