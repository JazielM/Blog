<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

| aqui puedes registrar rutas web para tu aplicacion. Estas rutas 
son cargadas mediante el RouteServiceProvider que esta en app/providers
con el grupi que contiene la web middleware  Ahora crea algo genial
*/

Route::resource('itemCRUD','ItemCRUDController');