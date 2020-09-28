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

Route::get('/', function () {
    return ('Selamat Datang');
});
Route::get('/hello', function () {
    return view('hello', ['name' => 'Andi']);
    });

Route::get ('/home', 'HomeController@home');
Route::get ('/about', 'AboutController@about');
Route::get ('/article/{id}', 'ArticleController');
Route::get ('/home/{page}', 'HomeController@home1');
//Route::get('/articles/{page}', function ($page) {
    //return "Halaman artikel dengan id  ".$page;
//});
