<?php

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

Route::get('/','PagesController@home');
Route::get('home','PagesController@home')->name('home');
Route::get('Bienvenido/{nombre?}','PagesController@saludo')
->name('hola')->where('nombre',"[A-Za-z]+");
Route::post('contacto','PagesController@message');

// TODO:poner las rutas mas limpias de crud mensajes
Route::resource('mensajes','MessagesController');

// TODO:poner las rutas mas limpias de crud usuarios
Route::resource('usuarios','UsersController');
