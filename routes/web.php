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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts','PostsController');

Route::get('cart','PostsController@cart');
Route::get('cart/clean','PostsController@cartClean');
Route::get('/getmsg','AjaxController@index');
Route::get('/getsearch/{val}','AjaxController@search');
Route::get('/posts/addAjax/{id}','PostsController@addProduct');
Route::get('/posts/delAjax/{id}','PostsController@delProduct');
Route::get('/posts/countAjax/{id}','PostsController@countProduct');
Route::get('/posts/viewpost/{id}','PostsController@viewProduct');

Route::get('/gallery', function () {
    return view('pages.gallery');
});
Route::get('/animation', function () {
    return view('pages.animation');
});

