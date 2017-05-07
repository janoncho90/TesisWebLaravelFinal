<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Store;
use App\Rol;
use Laracast\Flash\Flash;

class UsersController extends Controller
{
	 public function index()
    {
        $users=User::orderBy('id','ASC')->paginate(10);
        $rols=Rol::all();
        return view('admin.users.index')->with('users',$users)->with('rols',$rols);
    }

     public function create()
    {
          $rols=Rol::all();
          foreach($rols as $rol)
          {
            $rols_array[$rol->id] = $rol->type;
          }
          return view('admin.users.create')->with('rols',$rols_array);
    }

    public function store(Request $request)
    {
        $user=new User($request->all());
        $user->password=password_hash ( $request->password, PASSWORD_BCRYPT ); 
		$user->save();
        flash('El usuario '.$user->nickname.' ha sido creado con éxito!!!')->success();
		return redirect()->route('users.index');
    }

    public function showRegister()
    {
        return view('home.register');
    }

    public function register(Request $request)
    {
        //verificar que no exista el correo
        $correo=User::where('email', $request->email)->first();


        if($correo==null)
        {
            //verificar que no exista el nickname
            $nickname = User::where('nickname', $request->nickname)->first();
            if($nickname==null)
            {
                 //creo al nuevo usuario
                 $user=new User($request->all());
                 $user->password=password_hash ( $request->password, PASSWORD_BCRYPT );
                 $user->rol_id=2; 
                 $user->save();
                 flash('Su cuenta ha sido creada con éxito!!!')->success();
                 return redirect()->route('login');
            }
            else
            {
                flash('El nickname ingresado ya se encuentra en uso')->error();
                return redirect()->route('registroGet');
            }
        }
        else
        {
            flash('El correo ingresado ya se encuentra en uso')->error();
            return redirect()->route('registroGet');
        }
    }

    public function edit($id)
    {
          $user=User::find($id);
          $rols=Rol::all();
          foreach($rols as $rol)
          {
            $rols_array[$rol->id] = $rol->type;
          }
          return view('admin.users.edit')->with('user' , $user)->with('rols',$rols_array);
    }

     public function update(Request $request, $id)
    {
        $user=User::find($id);

        $user->rol_id=$request->rol_id;

        $user->save();

        flash('El usuario ha sido actualizado con éxito!!!')->success();
        return redirect()->route('users.index');
        
        /*$usernickname = User::where('nickname', $request->nickname)->first();
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
        }*/
       
        
    }

    public function show($id)
    {
        $user=User::find($id);
        $stores=Store::all()->where('user_id',$id);
        return view('admin.users.detail')->with('user',$user)->with('stores',$stores);
    }

    public function mydataShow($id)
    {
          $user=User::find($id);
          return view('profile/mydata')->with('user' , $user);
    }

    public function editMyData(Request $request, $id)
    {
        $user=User::find($id);
        $usernickname=User::where('nickname',$request->nickname)->first();
        if($usernickname!=null && $usernickname != $user)
        {
           
           flash('El nickname que ha ingresado ya está en uso!!!')->error();
           return view('profile/mydata')->with('user',$user);
        }
        else
        {
           $user->name=$request->name;
           $user->lastname=$request->lastname;
           $user->nickname=$request->nickname;
           $user->save();
           return view('profile/mydata')->with('user',$user);
        }
    }
}
