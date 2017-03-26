<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return 'welcome';
});

Route::get('/test', function () {
    return 'test';
});


Route::get('/home', [
		'uses' => 'HomeController@index',
		'as' => 'home'
]);




//get register routes
Route::get('/register' , [
		'uses' => 'RegisterController@getRegister',
		'as' => 'register'
]);
//post register routes
Route::post('/register' , [
		'uses' => 'RegisterController@postRegister',
		'as' => 'register'
]);



//get login routes
Route::get('/login' , [
		'uses' => 'LoginController@getLogin',
		'as' => 'login'
]);
//post login routes
Route::post('/login' , [
		'uses' => 'LoginController@postLogin',
		'as' => 'login'
]);



//get logout routes
Route::get('/logout' , [
		'uses' => 'LogoutController@logout',
		'as' => 'logout'
]);



