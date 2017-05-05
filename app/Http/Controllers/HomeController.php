<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('/');
    }

    public function showRegister()
    {
        return dd('si estoy accediendo aqui');
       /* return view('home.register');*/
    }

    public function register(Request $request)
    {
          
        dd($request->all());
        //verificar que no exista el correo
        /*$correo=User::where('email', $request->email)->first();


        if($correo==null)
        {
            //verificar que no exista el nickname
            $nickname = User::where('nickname', $request->nickname)->first();
            if($nickname==null)
            {
                 //creo al nuevo usuario
                 $user=new User($request->all());
                 $user->password=password_hash ( $request->password, PASSWORD_BCRYPT ); 
                 $user->save();
                 flash('Su cuenta ha sido creada con éxito!!!')->success();
                 return view('/login');
            }
            else
            {
                flash('El nickname ingresado ya se encuentra en uso')->error();
                return view('/register');
            }
        }
        else
        {
            flash('El correo ingresado ya se encuentra en uso')->error();
            return view('/register');
        }*/

       
    }
}
