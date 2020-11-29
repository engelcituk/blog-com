<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () { return view('home'); });
/* Route::get('email', function () {
    return  new App\Mail\InfoCredentials(App\Models\User::first(), 'asfasf') ;
});
 */


Auth::routes(['register' => false ]);

Route::group([
    'prefix'=>'admin', //prefijo para no poner admin/posts
    'namespace'=>'admin',//namespace para no poner admin\PostController@index
    'middleware'=>'auth'],//midleware para controlar el acceso
function(){
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::resource('posts', 'PostController',['except'=>'show','as'=>'admin']); //as es para add prefijo admin al nombre de las rutas
    Route::resource('users', 'UserController',['as'=>'admin']); //as es para add prefijo admin al nombre de las rutas

    Route::resource('roles', 'RoleController', ['except'=>'show','as'=>'admin']); //as es para add prefijo admin al nombre de las rutas
    Route::resource('permissions', 'PermissionController',['only'=>['index','edit','update'],'as'=>'admin']); //only para aceptar ciertos metodos

    //roles y permisos
    Route::middleware('role:Admin')
           ->put('users/{user}/roles', 'UserRolesController@update')
           ->name('admin.users.roles.update');

    Route::middleware('role:Admin')
           ->put('users/{user}/permissions', 'UserPermissionsController@update')
           ->name('admin.users.permissions.update');

}); 

