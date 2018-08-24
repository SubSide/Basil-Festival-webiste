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
Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/admin/artist/list', 'ArtistEditController@list')->name('list.artists');
Route::get('/admin/lezing/list', 'LezingEditController@list')->name('list.lezingen');
Route::get('/admin/catering/list', 'CateringEditController@list')->name('list.catering');
Route::get('/admin/faq/list', 'FaqEditController@list')->name('list.faqs');
Route::get('/admin/news/list', 'NewsEditController@list')->name('list.news');
Route::get('/admin/sponsor/list', 'SponsorEditController@list')->name('list.sponsors');
Route::get('/admin/popupmarkt/list', 'PopupEditController@list')->name('list.popup');
Route::get('/admin/huisregels/list', 'HuisregelEditController@list')->name('list.huisregels');

Route::match(['get', 'post'], '/admin/artist/{id}/edit', 'ArtistEditController@edit')->name('edit.artist');
Route::match(['get', 'post'], '/admin/lezing/{id}/edit', 'LezingEditController@edit')->name('edit.lezing');
Route::match(['get', 'post'], '/admin/catering/{id}/edit', 'CateringEditController@edit')->name('edit.catering');
Route::match(['get', 'post'], '/admin/faq/{id}/edit', 'FaqEditController@edit')->name('edit.faq');
Route::match(['get', 'post'], '/admin/news/{id}/edit', 'NewsEditController@edit')->name('edit.news');
Route::match(['get', 'post'], '/admin/sponsor/{id}/edit', 'SponsorEditController@edit')->name('edit.sponsor');
Route::match(['get', 'post'], '/admin/popupmarkt/{id}/edit', 'PopupEditController@edit')->name('edit.popup');
Route::match(['get', 'post'], '/admin/huisregels/{id}/edit', 'HuisregelEditController@edit')->name('edit.huisregel');

Route::match(['get', 'post'], '/admin/artist/{id}/delete', 'ArtistEditController@delete')->name('delete.artist');
Route::match(['get', 'post'], '/admin/lezing/{id}/delete', 'LezingEditController@delete')->name('delete.lezing');
Route::match(['get', 'post'], '/admin/catering/{id}/delete', 'CateringEditController@delete')->name('delete.catering');
Route::match(['get', 'post'], '/admin/faq/{id}/delete', 'FaqEditController@delete')->name('delete.faq');
Route::match(['get', 'post'], '/admin/news/{id}/delete', 'NewsEditController@delete')->name('delete.news');
Route::match(['get', 'post'], '/admin/sponsor/{id}/delete', 'SponsorEditController@delete')->name('delete.sponsor');
Route::match(['get', 'post'], '/admin/popupmarkt/{id}/delete', 'PopupEditController@delete')->name('delete.popup');
Route::match(['get', 'post'], '/admin/huisregels/{id}/delete', 'HuisregelEditController@delete')->name('delete.huisregel');

Route::match(['get', 'post'], '/admin/artist/new', 'ArtistEditController@edit')->name('new.artist');
Route::match(['get', 'post'], '/admin/lezing/new', 'LezingEditController@edit')->name('new.lezing');
Route::match(['get', 'post'], '/admin/catering/new', 'CateringEditController@edit')->name('new.catering');
Route::match(['get', 'post'], '/admin/faq/new', 'FaqEditController@edit')->name('new.faq');
Route::match(['get', 'post'], '/admin/news/new', 'NewsEditController@edit')->name('new.news');
Route::match(['get', 'post'], '/admin/sponsor/new', 'SponsorEditController@edit')->name('new.sponsor');
Route::match(['get', 'post'], '/admin/popupmarkt/new', 'PopupEditController@edit')->name('new.popup');
Route::match(['get', 'post'], '/admin/huisregels/new', 'HuisregelEditController@edit')->name('new.huisregel');


Auth::routes();
