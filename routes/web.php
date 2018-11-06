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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('user/{id}', function($userId){
	
	$user = \App\User::with('sector')->find($userId);

	if(!$user){
		echo "Usuário não encontrado";
		exit();
	}
	echo "Nome: {$user->name} <br> Setor: {$user->sector->description}";
	exit();
})->where('id', '[0-9]+');
