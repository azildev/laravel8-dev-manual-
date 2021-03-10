<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PagesController extends Controller
{
    //
    public function dashboard()
    {
        return view('dashboard.dashboard');
    }

    public function users()
    {
        return view('users.index');
    }
    
}
