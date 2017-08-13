<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Image;


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
        //Obtenemos el ultimo ID Product para cargar el nombre de la imageName
        $lastIdProduct = Product::all()->max('id');

        //Guardamos la imagen en el directorio publico con el nombre del producto
        $image = $request->image;
        $imageName = $lastIdProduct . '.' . $image->getClientOriginalExtension();
        $imagePath = 'images/products/';
        $image->move($imagePath, $imageName);

        //Guardamos la imagen en la tabla images
        Image::create([
            'source'      => $imagePath . $imageName,
            'description' => 'Image uploaded from product ' . $lastIdProduct
        ]);




      //
      // $entry = new \App\File();
      // $entry->mime = $file->getClientMimeType();
      // $entry->original_filename = $file->getClientOriginalName();
      // $entry->filename = $file->getFilename().'.'.$extension;
      // $entry->save();
      //
      // $product = new Product();
      // $product->file_id=$entry->id;
      // $product->name=Request::input('name');
      // $product->description=Request::input('description');
      // $product->price=Request::input('price');
      // $product->imageurl=Request::input('imageurl');
      // $product->save();
      //
      // return redirect('/products');


      // get current time and append the upload file extension to it,
      // then put that name to $photoName variable.
      // dd(time().'.'.$request->image->getClientOriginalExtension());

      /*
      talk the select file and move it public directory and make avatars
      folder if doesn't exsit then give it that unique name.
      */
      // $request->user_photo->move(public_path('avatars'), $photoName);





        // $product = new Product(array(
        //   'title'         => $request->get('title'),
        //   'slug'          => str_slug($request->get('title')),
        //   'description'   => $request->get('description'),
        //   'price'         => $request->get('price'),
        //   'quant_sold'    => $request->get('quant_sold'),
        //   'user_id'       => Auth::user()->id,
        //   'category_id'   => $request->get('category_id'),
        //   'image_id'      => '1'
        // ));
        // $product->save();
        // return redirect('profile');
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
