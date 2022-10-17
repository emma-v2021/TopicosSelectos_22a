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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Ruta para usuarios
Route::get('/usuarios', [App\Http\Controllers\UserController::class, 'index'])-> name('usuarios.index');
Route::get('/usuarios/create', [App\Http\Controllers\UserController::class, 'create'])-> name('usuarios.create');
Route::post('/usuarios/create', [App\Http\Controllers\UserController::class, 'store'])-> name('usuarios.store');
Route::get('/usuarios/{user}', [App\Http\Controllers\UserController::class, 'show'])-> name('usuarios.show_user');
