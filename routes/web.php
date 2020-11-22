<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () { return view('auth.login'); });
/* Route::get('email', function () {
    return  new App\Mail\InfoCredentials(App\Models\User::first(), 'asfasf') ;
});
 */

Auth::routes();

Route::group([
    'prefix'=>'admin', //prefijo para no poner admin/posts
    'namespace'=>'admin',//namespace para no poner admin\PostController@index
    'middleware'=>'auth'],//midleware para controlar el acceso
function(){
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::resource('posts', 'PostController',['except'=>'show','as'=>'admin']); //as es para add prefijo admin al nombre de las rutas
    Route::resource('users', 'UserController',['as'=>'admin']); //as es para add prefijo admin al nombre de las rutas

    Route::put('users/{user}/roles', 'UserRolesController@update')->name('admin.users.roles.update'); 
    Route::put('users/{user}/permissions', 'UserPermissionsController@update')->name('admin.users.permissions.update'); 

}); 

