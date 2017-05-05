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

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/login','Auth\LoginController@index');
