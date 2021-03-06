<?php

use Illuminate\Support\Facades\Route;


/* Route::get('email', function () {
    return  new App\Mail\InfoCredentials(App\Models\User::first(), 'asfasf') ;
});
 */

Auth::routes(['register' => false ]);
Route::get('/', 'PagesController@home')->name('home');
Route::get('blog', 'PagesController@blog')->name('blog');
Route::get('contact', 'PagesController@contact')->name('contact');
Route::get('about', 'PagesController@about')->name('aboutus');

Route::get('blog/{post}', 'PagesController@showPost')->name('post.show');
Route::get('blog/categoria/{category}', 'PagesController@showPostsByCategories')->name('post.categories.show'); 
Route::get('blog/tag/{tag}', 'PagesController@showPostsByTag')->name('post.tags.show'); 

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
    Route::post('posts/{post}/images', 'ImagesPostController@store')->name('admin.posts.images.store');
    Route::delete('posts/images/delete', 'ImagesPostController@destroy')->name('admin.posts.images.destroy');

    //roles y permisos
    Route::middleware('role:Admin')
           ->put('users/{user}/roles', 'UserRolesController@update')
           ->name('admin.users.roles.update');

    Route::middleware('role:Admin')
           ->put('users/{user}/permissions', 'UserPermissionsController@update')
           ->name('admin.users.permissions.update');

}); 

