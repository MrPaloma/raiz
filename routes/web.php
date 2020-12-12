<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Administrador\AdminUserController;
use App\Http\Controllers\Administrador\ClienteUserController;
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

Route::resource('/admin', AdminUserController::class);

Route::resource('/cliente', ClienteUserController::class);

Route::get('/cliente/{id}/doc', 'App\Http\Controllers\Administrador\ArchivoController@index');