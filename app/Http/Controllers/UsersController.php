<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Store;
use App\Rol;
use App\Address;
use App\Phone;
use Laracast\Flash\Flash;

class UsersController extends Controller
{
  //mostrar todos los usuarios en admin/users
	 public function index()
    {
        $users=User::orderBy('id','ASC')->paginate(10);
        $rols=Rol::all();
        return view('admin.users.index')->with('users',$users)->with('rols',$rols);
    }
 //crear un rol admin
     public function create()
    {
          $rols=Rol::all();
          foreach($rols as $rol)
          {
            $rols_array[$rol->id] = $rol->type;
          }
          return view('admin.users.create')->with('rols',$rols_array);
    }
  //registrar admin
    public function store(Request $request)
    {
        $user=new User($request->all());
        $user->password=password_hash ( $request->password, PASSWORD_BCRYPT ); 
		    $user->save();
        flash('El usuario '.$user->nickname.' ha sido creado con éxito!!!')->success()->important();
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
                 flash('Su cuenta ha sido creada con éxito!!!')->success()->important();
                 return redirect()->route('login');
            }
            else
            {
                flash('El nickname ingresado ya se encuentra en uso')->error()->important();
                return redirect()->route('registroGet');
            }
        }
        else
        {
            flash('El correo ingresado ya se encuentra en uso')->error()->important();
            return redirect()->route('registroGet');
        }
    }
    //mostrar editar rol de usuario
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
    //actualizar el rol de un usuario
     public function update(Request $request, $id)
    {
        $user=User::find($id);

        $user->rol_id=$request->rol_id;

        $user->save();

        flash('El usuario ha sido actualizado con éxito!!!')->success()->important();
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
    //ver el detalle de un usuario (vista del admin)
    public function show($id)
    {
        $user=User::find($id);
        $stores=Store::all()->where('user_id',$id);
        return view('admin.users.detail')->with('user',$user)->with('stores',$stores);
    }
    


    //mostrar los datos de un usuario miembro
    public function mydataShow($id)
    {
          $user=User::find($id);
          return view('profile/mydata')->with('user' , $user);
    }
    //editar los datos de un usuario miembro
    public function editMyData(Request $request, $id)
    {
        $user=User::find($id);
        $usernickname=User::where('nickname',$request->nickname)->first();
        if($usernickname!=null && $usernickname != $user)
        {
           $user->name=$request->name;
           $user->lastname=$request->lastname;
           $user->save();
           flash('El nickname no ha podido ser modificado porque el ingresado ya está en uso, inténte nuevamente!!!')->error()->important();
           return view('profile/mydata')->with('user',$user);
        }
        else
        {
           $user->name=$request->name;
           $user->lastname=$request->lastname;
           $user->nickname=$request->nickname;
           $user->save();
           flash('Cambios guardados exitósamente!!!')->success()->important();
           return view('profile/mydata')->with('user',$user);
        }
    }

    //editar correo de un usuario miembro
     public function editarCorreo(Request $request, $id)
    {
        $user=User::find($id);
        $password=$request->password;

         if (password_verify($password, $user->password)) 
         {
              /* Valido */
              $useremail=User::where('email',$request->email)->first();

              if($useremail!=null && $useremail != $user)
              {
                   flash('El correo ingresado ya se encuentra en uso!!!')->error()->important();
                   return view('profile/mydata')->with('user',$user);
              }
              else
              {
                   $user->email=$request->email;
                   $user->save();
                   flash('Su correo ha sido actualizado con éxito!!!')->success()->important();
                   return view('profile/mydata')->with('user',$user);
              }
         } 
         else 
         {
              /* Invalido */
              flash('Contraseña incorrecta, su correo no ha sido actualizado')->error()->important();
              return view('profile/mydata')->with('user',$user);
         }   
    }

    //cambiar password de un usuario miembro
     public function cambiarPassword(Request $request, $id)
    {
        $user=User::find($id);
        $passwordActual=$request->passwordActual;
        $passwordNuevo=$request->passwordNuevo;

         if (password_verify($passwordActual, $user->password)) 
         {
              /* Valido */
                   $hash = password_hash($passwordNuevo, PASSWORD_BCRYPT);
                   $user->password=$hash;
                   $user->save();
                   flash('Su contraseña ha sido actualizada con éxito!!!')->success()->important();
                   return view('profile/mydata')->with('user',$user);
              
         } 
         else 
         {
              /* Invalido */
              flash('Contraseña incorrecta, la contraseña no ha podido ser cambiada!!!')->error()->important();
              return view('profile/mydata')->with('user',$user);
         }   
    }
    //mostrar las direcciones de un usuario miembro
    public function myaddressesShow($id)
    {
      $user=User::find($id);
      $addresses=Address::all()->where('user_id',$id);
      if($addresses->count()!=0)
      {
          return view('profile/addresses')->with('addresses',$addresses);
      }
      else
      {
          flash('Actualmente no tiene direcciones registradas, agregue una para poder realizar pedidos!!!')->warning()->important();
          return view('profile/addresses')->with('addresses',$addresses);
          
      }
    }

    public function insertAddress(Request $request,$id)
    {
      $user=User::find($id);
      $address=new Address();
      $address->street=$request->street;
      $address->number=$request->number;
      $address->latitude=0.0;
      $address->longitude=0.0;
      $address->user_id=$user->id;
      $address->save();
      $addresses=Address::all()->where('user_id',$id);
      flash('Se ha registrado su nueva dirección con éxito!!!')->success()->important();
      return view('profile/addresses')->with('addresses',$addresses);
    }

     public function myphonesShow($id)
    {
      $user=User::find($id);
      $phones=Phone::all()->where('user_id',$id);
      if($phones->count()!=0)
      {
          return view('profile/phones')->with('phones',$phones);
      }
      else
      {
          flash('Actualmente no tiene teléfonos registrados!!!')->warning()->important();
          return view('profile/phones')->with('phones',$phones);
          
      }
    }


    public function insertPhone(Request $request,$id)
    {
      $user=User::find($id);
      $phone=new Phone();
      $phone->number=$request->number;
      $phone->user_id=$id;
      $phone->save();
      $phones=Phone::all()->where('user_id',$id);
      flash('Se ha registrado su nueva teléfono con éxito!!!')->success()->important();
      return view('profile/phones')->with('phones',$phones);
    }
}
