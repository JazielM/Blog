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

Route::get('/', function () {
    return view('index');
});
Route::get('itemCRUD',['as'=>'itemCRUD.index','uses'=>'ItemCRUDController@index']);
Route::get('itemCRUD/create',['as'=>'itemCRUD.create','uses'=>'ItemCRUDController@create']);

Route::post('itemCRUD/store',['as'=>'itemCRUD.store','uses'=>'ItemCRUDController@store']);

Route::get('itemCRUD/show/{id}',['as'=>'itemCRUD.show','uses'=>'ItemCRUDController@show']);

Route::get('itemCRUD/{id}/edit',['as'=>'itemCRUD.edit','uses'=>'ItemCRUDController@edit']);
/*
Route::patch('itemCRUD/update/{id}',['as'=>'itemCRUD.update','uses'=>'ItemCRUDController@update']);
Route::delete('itemCRUD/destroy/{id}',['as'=>'itemCRUD.destroy','uses'=>'ItemCRUDController@destroy']);
*/