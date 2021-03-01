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
    return view('hello');
});

// Route::get('/post', '\App\Http\Controllers\PostsController@index');
// Route::get('/post/{id}', '\App\Http\Controllers\PostsController@show');
// Route::resource('/post', '\App\Http\Controllers\PostsController');
Route::get('/post/{id}/{name}', '\App\Http\Controllers\PostsController@show_post');

Route::get('/contact', '\App\Http\Controllers\PostsController@contact');

Route::get('/example/{id}', function ($id) {
    return "this is example no.{$id}";
});

Route::get('/admin/example/or/whatever', Array('as'=>'admin.home',function () {
    $url = route("admin.home");
    // you can do something like this
    // <a href="route(''admin.home)"></a>
    return "now admin.home is shoten like this {$url}";
}));
