<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () { return view('auth.login'); });

Auth::routes();

Route::group([
    'prefix'=>'admin', //prefijo para no poner admin/sales
    'namespace'=>'admin',//namespace para no poner admin\SaleController@getProductos
    'middleware'=>'auth'],//midleware para controlar el acceso
function(){
    Route::get('/', 'AdminController@index')->name('dashboard');

}); 

