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

Route::get('/','PhotographyController@HomePage');
Route::get('/resume','PhotographyController@ResumePage');
Route::get('/contact','PhotographyController@ContactPage');

Route::get('/photography','PhotographyController@index');
Route::get('/photography/{album}','PhotographyController@view');

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/foo','PhotographyController@correctImageOrientation');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
