<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/profile/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function showLoginForm()
    {
        return view('home.login');
    }


    /**
     * Valida los datos del usuario.
     */
    public function login()
    {
        // Guardamos en un arreglo los datos del usuario.
        $userdata = array(
            'email' => Input::get('email'),
            'password'=> Input::get('password')
        );
        // Validamos los datos y ademas mandamos como un segundo parametro la opcion de recordar el usuario.
        if(Auth::attempt($userdata, Input::get('remember-me', 0)))
        {       
                // Si es roll administrador lo redirecciona al panel de administrador
                if(Auth::user()->rol_id == 1)
                {
                        return Redirect::to('/admin/index');
                }
                elseif(Auth::user()->rol_id == 2)
                {
                    // De ser otro tipo de roll, lo enviara a la seccion de solicitudes
                    return Redirect::to('/profile/index');
                }
                else
                {
                    return dd('Bienvenido usuario repartidor');
                }
            
        }
        // En caso de que la autenticacion haya fallado manda un mensaje al formulario de login y tambien regresamos los valores enviados con withInput().
        flash('Correo Electrónico o contraseña incorrectos!!!')->error();
        return Redirect::to('/login')
                    ->withInput();
    }
}
