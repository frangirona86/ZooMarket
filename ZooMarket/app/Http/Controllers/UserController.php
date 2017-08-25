<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;


class UserController extends Controller
{
    //
}
public function updatePassword(Request $request){

        if (Hash::check($request->mypassword, Auth::user()->password)){
             $user = new User;
             $user->where('email', '=', Auth::user()->email)
                  ->update(['password' => bcrypt($request->password)]);
             return redirect('user')->with('status', 'Password cambiado con éxito');
         }
         else
         {
             return redirect('user/password')->with('message', 'Credenciales incorrectas');
         }
     }
