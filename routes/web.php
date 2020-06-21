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



Route::get('/profil/{profil}', 'ProfilController@show');

Route::post('/home', 'ProfilController@store');

Route::get('/register', 'ProfilController@create');


Auth::routes();

Route::get('/accueil', function() {
  return view('accueil');
});

Route::get('/search', function() {
  return view('search');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profil','ProfilController@profil')->name('profil');

Route::get('/edit','ProfilController@edit');


