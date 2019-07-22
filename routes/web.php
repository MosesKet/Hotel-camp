<?php

    //home-page
    Route::get('/', function(){return View::make('pages.home');})->name('home.index');

    //contact
    Route::get('contact', 'ContactUsController@contactUs')->name('contact.create');
    Route::post('contact', 'ContactUsController@contactUsPost')->name('contact.store');

    //about us
    Route::get('about', function(){return View::make('pages.about');})->name('about.index');

    //gallery
    Route::get('gallery', function(){return View::make('pages.gallery');})->name('gallery.index');

    //reservations
    Route::get('reservation', function(){return View::make('pages.booking');})->name('booking.index');

    //services
    Route::get('services', function(){return View::make('pages.services');})->name('services.index');

    // Rooms
    Route::resource('rooms','RoomController');

