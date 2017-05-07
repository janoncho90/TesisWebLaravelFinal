<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//rutas de facebook login
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider')->name('facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/', function () {
    return view('home.index');
});

Route::get('/index', function () {
    return view('home.index');
});


Route::get('/registro','UsersController@showRegister')->name('registroGet');

Route::post('/registro','UsersController@register')->name('registroPost');


/*Route::get('/profile/index',function()
	{
		return view('profile.index');
	});*/

//rutas del administrador
Route::group(['prefix'=> 'admin','middleware'=>'auth'],function()
{

	Route::get('/index', function () {
		 return view('admin.index');
	});

    Route::resource('users','UsersController');

    Route::resource('stores','StoresController');

    Route::resource('rols','RolsController');

    Route::resource('states','StatesController');

    Route::get('states/{id}/destroy',[
    		'uses'=>'StatesController@destroy',
    		'as'=>'states.destroy'
    	]);

});


//rutas de los miembros

Route::group(['prefix'=>'profile','middleware'=>'auth'],function()
{

    Route::get('/index', function () {
		 return view('profile.index');
	});

    Route::get('mydata/{id}', ['uses'=>'UsersController@mydataShow'])->name('mydataGet');

    Route::post('mydata/{id}', ['uses'=>'UsersController@editMyData'])->name('editarDatos');

    Route::get('addresses/{id}',['uses'=>'UsersController@myaddressesShow'])->name('myaddressesGet');

    Route::post('addresses/{id}',['uses'=>'UsersController@insertAddress'])->name('insertAddress');

    Route::get('phones/{id}',['uses'=>'UsersController@myphonesShow'])->name('myphonesGet');
    
    Route::post('phones/{id}',['uses'=>'UsersController@insertPhone'])->name('insertPhone');

    Route::post('email/edit/{id}',['uses'=>'UsersController@editarCorreo'])->name('editarCorreo');
    Route::post('password/edit/{id}',['uses'=>'UsersController@cambiarPassword'])->name('cambiarPassword');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/login','Auth\LoginController@index');
