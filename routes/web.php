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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@store');

Route::get('/accountabilities', 'AccountabilityController@index')->name('home');
Route::post('/accountabilities', 'AccountabilityController@store');
// Route::resource('/accountabilities', 'AccountabilityController');
Route::patch('/accountabilities/{accountability}', 'AccountabilityController@update');

Route::get('/inventories', 'InventoryController@index')->name('home');

Route::get('/register', 'HomeController@register');
Route::post('/register', 'HomeController@store');
Route::get('/test', 'HomeController@test');

Route::get('/logout', function(){
        Session::flush();
        Auth::logout();
        return redirect('/');
});