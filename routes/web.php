<?php

use App\Http\Controllers\PremiumController;
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

Route::get('/profil','ProfilController@profil')->name('profil');
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
  Route::resource('/users', 'UsersController', ['exept'=>['show','create','store']]);

});

Route::get('/profil/{profil}', 'ProfilController@show');
Route::get('/profil/{profil}/edit','ProfilController@edit');
Route::put('/profil/{profil}','ProfilController@update');
Route::post('/search','ProfilController@search');
Route::post('/accueil', 'ProfilController@store');
Route::get('/accueil', 'ProfilController@index');

Route::get('/register', 'ProfilController@create');

Route::post('/messagerie', 'UserController@create');
Route::get('/messagerie', 'UserController@index');
Route::get('/nouveau', function() {
  return view('nouveau');
});

Auth::routes();

Route::get('/search', function() {
  return view('search');
});

Route::get('/premium', function() {
    return view('premium');
});
Route::get('/premium/payement','PremiumController@create');
