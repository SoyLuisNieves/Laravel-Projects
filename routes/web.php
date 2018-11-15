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
    return view('welcome');
});

Route::get('/users', function(){
	return 'Users';
});

Route::get('/users/{id}', function($id){
	return "Mostrando detalle del usuario: {$id}";
})->where('id', '[0-9]+');

Route::get('/users/new', function(){
	return "Create new user";
});

Route::get('/saludo/{name}/{nickname?}', function($name, $nickname=null){
	// Primera letra del nombr e en mayusculas
	// $name = ucfirst($name);
	if($nickname){
		return "Welcome: {$name} your nickname is: {$nickname}";
	}else{
		return "Welcome: {$name}";
	}
});
