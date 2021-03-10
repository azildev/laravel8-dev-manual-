<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $email = $request->email;
        $pwd   = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $pwd])) {
            return redirect('dashboard');
            // return "Hai ". Auth::user()->name;
        }else{
            return "Maaf email atau password yang anda masukan tidak sesuai.";
        }
    }
}
