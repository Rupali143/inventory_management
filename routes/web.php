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

Route::get('/home', function () { return view('index'); })->name('home')->middleware('auth','admin');

//Route::post('/login',function(){return view('users/login');})->name('login');
Route::get('/',array('as'=>'home','uses'=>'LoginController@index'));

Route::post('/login',array('as'=>'login','uses' =>'LoginController@doLogin'));

Route::get('/logout',array('as' => 'logout','uses' =>'LoginController@logout'));
Auth::routes();

Auth::routes(['login' => false]);
Route::get('/home1', 'HomeController@index')->name('home1');

//Route::post('/register',array('as'=>'register','uses' => 'RegisterController@save'));