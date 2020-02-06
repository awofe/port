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
    return view('Ola_portfolio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('categories','CategoriesController');
Route::get('port','PortController@index');
//Route::get('Ola_portfolio','OlaController@index');
