<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () { return view('auth.login'); });

Auth::routes();

Route::group([
    'prefix'=>'admin', //prefijo para no poner admin/posts
    'namespace'=>'admin',//namespace para no poner admin\PostController@index
    'middleware'=>'auth'],//midleware para controlar el acceso
function(){
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::resource('posts', 'PostController',['except'=>'show','as'=>'admin']); //as es para add prefijo admin al nombre de las rutas
    Route::resource('users', 'UserController',['as'=>'admin']); //as es para add prefijo admin al nombre de las rutas

}); 

