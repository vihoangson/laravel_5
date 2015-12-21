<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//article_category
Route::get('article/img_show/{id}/{slug}/{santo}.html', 'ArticlesController@img_show');
Route::resource('article', 'ArticlesController');
Route::resource('/', 'ArticlesController');
