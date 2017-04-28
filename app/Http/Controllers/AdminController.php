<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        
        return view('admin.index');
    }

    public function create()
    {
          return view('admin.users.create');
    }

    public function store(Request $request)
    {
        /*$user=new User($request->all());
        $user->password=password_hash ( $request->password, PASSWORD_BCRYPT ); 
		$user->save();
		return redirect('admin/users');*/
    }
}
