<?php

use Illuminate\Support\Facades\Route;

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

Route::get("user", 'UserController@index');
Route::get('/user/mangas/create', 'UserMangaController@create');
Route::post('/user/mangas', 'UserMangaController@store');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
