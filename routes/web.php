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

Route::get('/','PagesController@home');
Route::get('/home', 'PagesController@home');

Route::get('aboutus', 'PagesController@aboutus');

Route::get('/gallery', 'PagesController@gallery');

Route::get('/admin', 'PagesController@admin');
Route::get('/newplace', 'PagesController@newplace');
Route::get('/newblog', 'PagesController@newblog');
Route::get('/editblog/{id}', 'PagesController@editblog');

Route::get('/blogplaces', 'PagesController@blogplaces');
//blogs to be selectable
Route::get('/blogs/{place}', 'PagesController@blogs');

//to show the full blog
Route::get('blog/{id}', 'PagesController@blog');



Route::post('/datacontroller/place', 'DataController@storeplace');
Route::post('/datacontroller/blog', 'DataController@storeblog');
Route::post('/datacontroller/updateblog', 'DataController@updateblog');

Auth::routes(['register' => false]);
Route::get('/admin', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
