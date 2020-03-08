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

Route::get('/', 'MenuController@index');
Route::get('/apropos', 'MenuController@apropos')->name('apropos');
Route::get('/contact', 'MenuController@contact')->name('contact');

Route::get('/albums', 'AlbumsController@index')->name('albums');
Route::get('/albums/create', 'AlbumsController@create')->name('album-create');
Route::post('/albums/store', 'AlbumsController@store')->name('album-store');
Route::get('/albums/{id}','AlbumsController@show')->name('album-show');

Route::get('/albumsvideos', 'AlbumsVideosController@index')->name('albumsvideos');
Route::get('/albumsvideos/create', 'AlbumsVideosController@create')->name('albumvideo-create');
Route::post('/albumsvideos/store', 'AlbumsVideosController@store')->name('albumvideo-store');
Route::get('/albumsvideos/{id}','AlbumsVideosController@show')->name('albumvideo-show');

Route::get('/photos/create/{albumId}', 'PhotosController@create')->name('photo-create');
Route::post('/photos/store', 'PhotosController@store')->name('photo-store');
Route::get('/photos/{id}', 'PhotosController@show')->name('photo-show');
Route::delete('/photos/{id}/delete', 'PhotosController@destroy')->name('photo-destroy');

Route::get('/videos/create/{albumId}', 'VideosController@create')->name('video-create');
Route::post('/videos/store', 'VideosController@store')->name('video-store');
Route::get('/videos/{id}', 'VideosController@show')->name('video-show');
Route::delete('/video/{id}/delete', 'VideosController@destroy')->name('video-destroy');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');

Route::post('contact/submit','ContactController@submit')->name('contact-form-submit');
