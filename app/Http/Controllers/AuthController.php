<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
Use Alert;

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
            alert()->error('Login Gagal','Email atau password anda salah.')->showConfirmButton('OK', '#3085d6');
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
