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
//
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('home', 'HomepageController@show');

Route::post('blogs/post_popup_img', 'BlogsController@post_popup_img');
Route::get('blogs/popup_img', 'BlogsController@popup_img');
Route::post('blogs/post_newblog','BlogsController@store');

Route::resource('blogs', 'BlogsController');
Route::get('blogs/delete/{id}', 'BlogsController@destroy');


Route::post('/search.html', 'HomepageController@search');
Route::get('/search.html', 'HomepageController@search');

Route::get('/', 'HomepageController@show');
Route::get('/index.html', 'HomepageController@show');
Route::get('/showcat.html', 'HomepageController@show_by_cat');
Route::get('/single-video.html', "HomepageController@single_detail");
Route::get('/single-video-{id}.html', "HomepageController@single_detail");

Route::get('/category/{id}.html', "HomepageController@category");


Route::get('/admin/import_video/', "admin\ImportvideoController@show");
Route::get('/admin/import_video/cron_tab', "admin\ImportvideoController@cron_tab");
Route::get('/admin/',  function(){
	return view("admin.index");
});

Route::get('/admin/import_video/ajax_action/{case}', "admin\ImportvideoController@ajax_action_import_video");
Route::get('/admin/import_video/ajax_action/{case}/{keywords}', "admin\ImportvideoController@ajax_action_import_video");


// /import_video
Route::get('/inc/more-uploads-1.html', "HomepageController@ajax_video_load_more");
//Route::get('/feature.html', "HomepageController@feature_video");


Route::get('article/img_show/{id}/{slug}/{santo}.html', 'ArticlesController@img_show');
Route::resource('article', 'ArticlesController');

