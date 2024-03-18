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


/**
  *  Verb        URI                         Action      Route Name
  *  GET         /usuario                    index       usuario.index
  *  GET         /usuario/create             create      usuario.create
  *  POST        /usuario                    store       usuario.store
  *  GET         /usuario/{usuario}          show        usuario.show
  *  GET         /usuario/{usuario}/edit     edit        usuario.edit
  *  PUT/PATCH   /usuario/{usuario}          update      usuario.update
  *  DELETE      /usuario/{usuario}          destroy     usuario.destroy
 */

Route::resource('usuario', 'App\Http\Controllers\UsuarioController');

Route::resource('producto', 'App\Http\Controllers\ProductoController');