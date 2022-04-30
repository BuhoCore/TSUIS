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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'App\Http\Controllers\PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\PageController@upgrade']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('posts', 'App\Http\Controllers\PostController', ['except' => ['show']]);
	Route::get('post/{id}/show', ['as' => 'posts.show', 'uses' => 'App\Http\Controllers\PostController@show']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('categorias', 'App\Http\Controllers\CategoriaController', ['except' => ['show']]);
	Route::get('categoria/{id}/show', ['as' => 'categorias.show', 'uses' => 'App\Http\Controllers\CategoriaController@show']);
	
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('libros', 'App\Http\Controllers\LibroController', ['except' => ['show']]);
	Route::get('libro/{id}/show', ['as' => 'libros.show', 'uses' => 'App\Http\Controllers\LibroController@show']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('categoriasproductos', 'App\Http\Controllers\CategoriasproductoController', ['except' => ['show']]);
	Route::get('categoriaproducto/{id}/show', ['as' => 'categoriasproductos.show', 'uses' => 'App\Http\Controllers\CategoriasproductoController@show']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('productos', 'App\Http\Controllers\ProductoController', ['except' => ['show']]);
	Route::get('producto/{id}/show', ['as' => 'productos.show', 'uses' => 'App\Http\Controllers\ProductoController@show']);
});

	Route::group(['middleware' => 'auth'], function () {
Route::get('post/export/', ['as' => 'post.export', 'uses' => 'App\Http\Controllers\PostController@export']);
	});

	Route::group(['middleware' => 'auth'], function () {
		route::resource('consejos', 'App\Http\Controllers\ConsejoController', ['except' => ['show']]);
		route::get('consejo/{id}/show', ['as' => 'consejos.show', 'uses' => 'App\Http\Controllers\ConsejoController@show']);
		Route::get('consejos/export/', ['as' => 'consejos.export', 'uses' => 'App\Http\Controllers\ConsejoController@export']);
	});

	Route::group(['middleware' => 'auth'], function () {
		Route::resource('animales', 'App\Http\Controllers\AnimaleController', ['except' => ['show']]);
		Route::get('animal/{id}/show', ['as' => 'animales.show', 'uses' => 'App\Http\Controllers\AnimaleController@show']);

	});

	Route::group(['middleware' => 'auth'], function () {
		route::resource('cartillas', 'App\Http\Controllers\CartillaController', ['except' => ['show']]);
		route::get('cartilla/{id}/show', ['as' => 'cartillas.show', 'uses' => 'App\Http\Controllers\CartillaController@show']);
	});