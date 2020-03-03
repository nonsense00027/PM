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
    $users = App\User::all();
    return view('auth.login',compact('users'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@store');

Route::get('/accountabilities', 'AccountabilityController@index')->name('home');
Route::post('/accountabilities', 'AccountabilityController@store');
// Route::resource('/accountabilities', 'AccountabilityController');
Route::patch('/accountabilities/{accountability}', 'AccountabilityController@update');
Route::patch('/inventories/{accountability}', 'InventoryController@update');
Route::get('/inventories', 'InventoryController@index');

Route::get('/register', 'HomeController@register');
Route::post('/register', 'HomeController@store');
Route::get('/test', 'HomeController@test');

Route::get('/logout', function(){
        Session::flush();
        Auth::logout();
        return redirect('/');
});

Route::get('/remarks/{id}', 'ModalController@remarks');