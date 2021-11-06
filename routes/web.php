<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('inicio');


Route::group(['middleware' => 'admin'], function(){
    Route::get('admin/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::resource('/admin/articulos', App\Http\Controllers\ArticuloController::class);
    Route::resource('/admin/proveedores', App\Http\Controllers\ProveedorController::class);
    Route::resource('/admin/categorias', App\Http\Controllers\CategoriaController::class);



});

Route::group(['middleware' => 'usuario'], function(){
    Route::get('usuario/inicio', function () {
        return view('usuario');
    })->name('inicio');

});


Auth::routes();
