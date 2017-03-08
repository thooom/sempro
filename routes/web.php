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

Auth::routes();

	// Display videos
Route::get('/categories/{category}', 'CategoriesController@showcategory');
Route::get('/', 'CategoriesController@frontpage');

	// Admin
Route::get('/home', 'HomeController@index');

	// Videos
Route::get('/addvideo', 'HomeController@add_video');
Route::get('/featurevideo', 'HomeController@feature_video');
Route::get('/video_edit/{id}', 'VideosController@edit_video');
Route::get('/video_delete/{id}', 'VideosController@delete_video');
			
			// Vid/POST
	Route::post('/videos', 'VideosController@store');

	// Categories
Route::get('/addcategory', 'HomeController@add_category');
Route::get('/renamecategory', 'HomeController@rename_category');
Route::get('/deletecategory', 'HomeController@delete_category');

			// Cat/POST
	Route::post('/categories', 'CategoriesController@store');
	Route::post('/categories/rename', 'CategoriesController@rename');
	Route::post('/categories/delete', 'CategoriesController@delete');
	Route::post('/categories/pickfeature', 'CategoriesController@pickfeature');
	Route::post('/categories/pickfeaturevideo', 'CategoriesController@pickfeaturevideo');
