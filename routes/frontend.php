<?php

use Illuminate\Support\Facades\Route;

// ======================= Home Page ======================= https://preview.eagle-themes.com/html/himara/index.html

Route::get('/','frontend\HomeController@index')->name('home');

Route::get('/about','frontend\HomeController@about')->name('about');

Route::get('/contact','frontend\HomeController@contact')->name('contact');

// Route::get('/blog/{urlBlog}','frontend\PostController@blog')->name('blog');

// Route::get('/post/{urlPost}','frontend\PostController@post')->name('post');

//phòng

Route::get('/list-room/{urlListRoom}','frontend\RoomController@listroom')->name('list-room-fe');

Route::get('/room/{idRoom}','frontend\RoomController@room')->name('room-fe');

//dịch vụ

Route::get('/list-services','frontend\ServiceController@listservice')->name('list-services-fe');

Route::get('/service/{idService}','frontend\ServiceController@service')->name('service-fe');

Route::post('/booking-room','frontend\RoomController@bookRoom')->name('booking-room-fe');

Route::get('/booking-form','frontend\BookingController@index')->name('booking-form-fe');

Route::post('/booking-check','frontend\BookingController@check')->name('booking-check-fe');

Route::post('/booking-final','frontend\BookingController@final')->name('booking-final-fe');

Route::get('/search-room','frontend\RoomController@searchroom')->name('search-room-fe');
