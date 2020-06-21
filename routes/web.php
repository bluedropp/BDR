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



Route::get('/profil/{profil}', 'ProfilController@show');

Route::post('/home', 'ProfilController@store');

Route::get('/register', 'ProfilController@create');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/premium', function() {
    return view('premium');
});
Route::get('/premium/payement','PremiumController@create');


Route::get('/profil','ProfilController@profil')->name('profil');

Route::get('/edit','ProfilController@edit');



