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
    return view('home.index');
});


// Route::get('/activities', function () {
//     return view('admin.activities.activities');
// });

Route::get('/news', function () {
	
    return view('admin.adminNews.news');
});
Route::get('/activities','ActivitiesController@index')->name('activities');
Route::post('/activities','ActivitiesController@store')->name('activities.store');
