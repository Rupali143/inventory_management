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

Auth::routes();
//Route::get('/home', function () { return view('index'); })->name('home')->middleware('auth','admin');

//Route::post('/login',function(){return view('users/login');})->name('login');
Route::get('/',array('as'=>'home','uses'=>'LoginController@index'));

Route::post('/login',array('as'=>'login','uses' =>'LoginController@doLogin'));



Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/logout',array('as' => 'logout','uses' =>'LoginController@logout'));
});