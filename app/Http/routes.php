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
Route::delete('article_category/delete', 'Admin\ArticleCategoryController@delete');
Route::resource('article_category', 'Admin\ArticleCategoryController', ['except' => ['show']]);
Route::put('article_category/updateFlag/{id}', 'Admin\ArticleCategoryController@updateFlag');
