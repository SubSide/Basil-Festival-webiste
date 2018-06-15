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

Route::get('/', 'HomeController@index');
Route::get('/admin', 'AdminController@index');

Route::get('/admin/artist/list', 'ArtistEditController@list')->name('list.artists');
Route::get('/admin/faq/list', 'FaqEditController@list')->name('list.faqs');
Route::get('/admin/news/list', 'NewsEditController@list')->name('list.news');
Route::get('/admin/sponsor/list', 'SponsorEditController@list')->name('list.sponsors');

Route::match(['get', 'post'], '/admin/artist/{id}/edit', 'ArtistEditController@edit')->name('edit.artist');
Route::match(['get', 'post'], '/admin/faq/{id}/edit', 'FaqEditController@edit')->name('edit.faq');
Route::match(['get', 'post'], '/admin/news/{id}/edit', 'NewsEditController@edit')->name('edit.news');
Route::match(['get', 'post'], '/admin/sponsor/{id}/edit', 'SponsorEditController@edit')->name('edit.sponsor');

Route::match(['get', 'post'], '/admin/artist/{id}/delete', 'ArtistEditController@delete')->name('delete.artist');
Route::match(['get', 'post'], '/admin/faq/{id}/delete', 'FaqEditController@delete')->name('delete.faq');
Route::match(['get', 'post'], '/admin/news/{id}/delete', 'NewsEditController@delete')->name('delete.news');
Route::match(['get', 'post'], '/admin/sponsor/{id}/delete', 'SponsorEditController@delete')->name('delete.sponsor');

Route::match(['get', 'post'], '/admin/artist/new', 'ArtistEditController@edit')->name('new.artist');
Route::match(['get', 'post'], '/admin/faq/new', 'FaqEditController@edit')->name('new.faq');
Route::match(['get', 'post'], '/admin/news/new', 'NewsEditController@edit')->name('new.news');
Route::match(['get', 'post'], '/admin/sponsor/new', 'SponsorEditController@edit')->name('new.sponsor');


Auth::routes();
