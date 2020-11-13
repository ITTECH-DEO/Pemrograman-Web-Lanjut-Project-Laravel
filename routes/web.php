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
    return view ('/home');
});
Route::get('/hello', function () {
    return view('hello', ['name' => 'Andi']);
    });

Route::get ('/dash', 'HomeControllerdash@dash')->name('dash');
Route::get ('/about', 'AboutController@about');
Route::get ('/article/{id}', 'ArticleController');
//Route::get ('/home/{page}', 'HomeController@home1');
Route::get('/movies', 'MoviesController@movies');
Route::get('/videos', 'VideosController@videos');
Route::get('/reviews', 'ReviewsController@reviews');
Route::get('/contact', 'ContactController@contact');
Route::get('/view', 'CobaController@coba');

Auth::routes();

Route::get('/logout' ,function(){
	$logout=Auth::logout();
	return view('auth.login');
});
Route::get('/' ,function(){
	return view('auth.login');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/manage', 'ArticleController@index')->name('manage'); 
Route::get('/articles/add','ArticleController@add');
Route::get ('/mshome', 'MsmanageController@mshome');
Route::get ('/msmanageedit', 'MsmanageeditController@msmanageedit');
Route::get ('/rubah', 'MsmanagerubahController@rubah');
Route::get ('/user', 'UserController@user');
Route::post('/articles/create','ArticleController@create');
Route::get('/articles/edit/{id}','ArticleController@edit');
Route::post('/articles/update/{id}','ArticleController@update');
Route::get('/articles/delete/{id}','ArticleController@delete');

Route::get('/user/edit/{id}','ArticleController@useredit');
Route::post('/user/update/{id}','ArticleController@userupdate');
Route::get('/user/delete/{id}','ArticleController@userdelete');
Route::get('/articles/cetak_pdf', 'ArticleController@cetak_pdf'); 