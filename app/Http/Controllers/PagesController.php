<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PagesController extends Controller
{
    //
    public function index()
    {
        return 'HAHAHHA'.Auth::user()->is_admin;
    }
    
}
