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

//front routes

Route::get('/', 'HomeController@index')->name('front.home');
Route::get('/o-meni', 'AboutController@index')->name('front.about');
Route::get('/galerija', 'GalleryController@index')->name('front.gallery');
Route::get('/blog', 'BlogController@index')->name('front.blog');
Route::get('/kontakt', 'ContactController@index')->name('front.contact');

Route::post('/ajax/contact-form', 'ContactController@process')->name('front.contact.process');
