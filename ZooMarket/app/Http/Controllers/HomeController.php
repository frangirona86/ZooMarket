<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('profile');
    }
    public function product()
    {
      return view('product.product-list');
    }
    public function edit()
    {
      return view('profile-edit');
    }
    public function category()
    {
      $categoriesNameList = Category::pluck('name','slug');
      return $categoriesNameList;
    }
    public function update(Request $request){

      $user = Auth::user();

      $user->name= $request->name;
      $user->surname= $request->surname;
      $user->email= $request->email;
      $user->phone= $request->phone;

      $user->save();

      return redirect('profile');
    }

}
