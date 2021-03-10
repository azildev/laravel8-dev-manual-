<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use DataTables;

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
    
    public function getUsers()
    {
      
        $products = User::select(
            'name',
        );
        return DataTables::of($products)->make(true);
    
        // return Datatables::of(User::all())->make(true);
    }
}
