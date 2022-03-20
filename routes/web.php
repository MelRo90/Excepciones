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
})->name('home');

Route::get( '/list_alumno', [\App\Http\Controllers\ControllerAlumno::class, 'index' ] )->name('alumno.index');
Route::get( '/list_categoria', [\App\Http\Controllers\ControllerCategoria::class, 'index' ] )->name('categoria.index');