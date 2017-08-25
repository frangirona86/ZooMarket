<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;


class UserController extends Controller
{
  public function showChangePass(){
    return view('users.change');
    }

  public function UpdateChangePass(Request $request)
  {
      
    //  if($request('npassword') === $request('cnpassword'))
    // {
    //       if (Hash::check($request->mypassword, Auth::user()->password)){
    //          $user->update(['password' => bcrypt($request->password)]);
    //          return redirect('user')->with('status', 'Password cambiado con éxito');
    //  }
    //  else
    //  {
    //      return redirect('user/password')->with('message', 'Credenciales incorrectas');
    //  }
    dd('funciono');
  }

}
