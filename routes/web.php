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
Route::get('/',function (){return view('welcome');});
//
//Route::get('/admin',array('as'=>'admin','uses' =>'LoginController@index'));
//
////Auth::routes(['login' => false]);
//
Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@dashboard')->name('home');

    Route::get('/logout',array('as' => 'logout','uses' =>'LoginController@logout'));
});

Route::get('/admin', array('uses' =>'Auth\LoginController@showLoginForm'));


//Route::get('/create',array('as'=>'create','uses' =>'ProductController@create'));
//
//Route::post('',array('as'=>'','uses'=>'ProductController@store'));
Route::resource('product','ProductController');


//Route::prefix('admin')->group(function () {
//    Auth::routes();

//});
//Route::get('',array('as' => 'logout','uses' =>'Auth\ForgotPasswordController@sendResetLinkEmail'));