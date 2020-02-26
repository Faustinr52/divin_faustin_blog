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
/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', 'HomeController@index');
Route::get('articles', 'ArticlesController@article');


Route::get('/articles/{post_name}', 'PostsController@show');
Route::post('contact', ['uses' => 'EmailController@postForm', 'as' => 'storeEmail']);
Route::get('contact', 'EmailController@getForm');

   



