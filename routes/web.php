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

Route::get('/', function()
{
   return View::make('pages.home');
});
Route::get('contact', 'ContactUsController@contactUs');
Route::post('contact', 'ContactUsController@contactUsPost')->name('contact.store');
Route::get('about', function()
{
   return View::make('pages.about');
});
Route::get('gallery', function()
{
   return View::make('pages.gallery');
});
Route::get('reservation', function()
{
   return View::make('pages.booking');
});
Route::get('services', function()
{
   return View::make('pages.services');
});
Route::get('rooms', function()
{
   return View::make('pages.rooms');
});
Route::get('room-details', function()
{
   return View::make('pages.room');
});