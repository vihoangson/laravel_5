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
Route::get('/', 'HomepageController@show');
Route::get('/index.html', 'HomepageController@show');
Route::get('/showcat.html', 'HomepageController@show_by_cat');
Route::get('/single-video.html', "HomepageController@single_detail");
Route::get('/single-video-{id}.html', "HomepageController@single_detail");


Route::get('/admin/import_video/', "admin\ImportvideoController@show");
Route::get('/admin/', function(){
	return view("admin.index");
});

// /import_video
Route::get('/inc/more-uploads-1.html', "HomepageController@ajax_video_load_more");
//Route::get('/feature.html', "HomepageController@feature_video");


Route::get('article/img_show/{id}/{slug}/{santo}.html', 'ArticlesController@img_show');
Route::resource('article', 'ArticlesController');

