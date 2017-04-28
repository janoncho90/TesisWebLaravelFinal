<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        $users=User::orderBy('id','ASC')->paginate(10);
        return view('admin.users.index')->with('users',$users);
    }

    public function create()
    {
          return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $user=new User($request->all());
        $user->password=password_hash ( $request->password, PASSWORD_BCRYPT ); 
		$user->save();
		dd('usuario creadocon exito');
    }
}
