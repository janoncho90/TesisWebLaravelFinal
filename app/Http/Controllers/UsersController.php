<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Store;
use Laracast\Flash\Flash;

class UsersController extends Controller
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
        flash('El usuario '.$user->nickname.' ha sido creado con éxito!!!')->success();
		return redirect()->route('users.index');
    }

    public function edit($id)
    {
          $user=User::find($id);
          return view('admin.users.edit')->with('user' , $user);
    }

     public function update(Request $request, $id)
    {
        $user=User::find($id);
        
        $usernickname = User::where('nickname', $request->nickname)->first();
        $useremail = User::where('email', $request->email)->first();
        if($usernickname!=null && $usernickname != $user)
        {
            flash('El nickname que ha ingresado ya está en uso!!!')->error();
            //return redirect()->route('users.index');
            return view('admin.users.edit')->with('user' , $user);
        }

        elseif($useremail!=null && $useremail!=$user)
        {
            flash('El email que ha ingresado ya está en uso!!!')->error();
            //return redirect()->route('users.index');
            return view('admin.users.edit')->with('user' , $user);
        }
        else
        {
            $user->name=$request->name;
            $user->lastname=$request->lastname;
            $user->nickname=$request->nickname;
            $user->email=$request->email;
            $user->save();
            flash('El usuario ha sido actualizado con éxito!!!')->success();
            return redirect()->route('users.index');
        }
       
        
    }

    public function show($id)
    {
        $user=User::find($id);
        $stores=Store::all()->where('user_id',$id);
        return view('admin.users.detail')->with('user',$user)->with('stores',$stores);
    }


}
