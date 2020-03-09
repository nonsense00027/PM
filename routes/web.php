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

// ACCOUNTABILITY
Route::get('/accountabilities', 'AccountabilityController@index')->name('home');
Route::post('/accountabilities', 'AccountabilityController@store');
Route::patch('/accountabilities/{accountability}', 'AccountabilityController@update');
Route::patch('/accountabilities/{accountability}/it', 'AccountabilityController@update2');
Route::patch('/inventories/{inventory}', 'InventoryController@update');
Route::get('/inventories', 'InventoryController@index');
Route::post('/getInventory', 'InventoryController@getInventory');

Route::get('/register', 'HomeController@register');
Route::post('/register', 'HomeController@store');
Route::get('/test', 'HomeController@test');

Route::patch('/users/reset', 'HomeController@reset');
Route::patch('/users/{user}', 'HomeController@update');

Route::patch('/accountabilities/active/{accountability}', 'AccountabilityController@active');
Route::get('/logout', function(){
        Session::flush();
        Auth::logout();
        return redirect('/');
});

Route::get('/remarks/{id}', 'ModalController@remarks');