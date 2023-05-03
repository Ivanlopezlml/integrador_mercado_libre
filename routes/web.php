<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MercadoLibreApiController;

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
    return view('app');
});

Route::get('/dashboard', 'Dashboard@index')->name('dashboard');

//Agregar un nuevo usuario de ML
Route::prefix('mercado')->group(function () {
    Route::get('/nuevo-usuario', 'MercadoLibreApiController@RegisterNewUser');
    Route::post('/guardar-usuario', 'MercadoLibreApiController@StoreNewUser')->name('StoreNewMercadoUser');
});


Auth::routes();
//Alta de administradores
Route::middleware(['auth'])->group(function() {
    Route::resource('users','UserController');
});


//Route::get('/home', 'HomeController@index')->name('home');
