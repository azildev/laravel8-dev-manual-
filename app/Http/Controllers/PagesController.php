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
        $data = User::latest()->get();
        return Datatables::of($data)
            ->editColumn("created_at", function ($data) {
                return date("m/d/Y", strtotime($data->created_at));
            })
            ->addColumn('Action', function ($data) {
                $action = '
                            <a href="javascript:void(0)" class="btn btn-primary"><i class="fa fa-pencil"></i></a> 
                            <button type="submit" class="btn btn-danger" onclick="deleteConfirmation('.$data->id.')"><i class="fa fa-trash"></i></button>';
                return $action;
            })
            ->rawColumns(['Action'])
            ->addIndexColumn() // tambahkan line ini
            ->removeColumn('id') // tambahkan line ini lagi untuk menghilangkan "id"
            ->make(true);
    }

    public function destroy_users($id)
    {
        $delete = User::destroy($id);

            // check data deleted or not
            if ($delete == 1) {
                $success = true;
                $message = "User deleted successfully";
            } else {
                $success = true;
                $message = "User not found";
            }

            //  return response
            return response()->json([
                'success' => $success,
                'message' => $message,
            ]);
    }
}
