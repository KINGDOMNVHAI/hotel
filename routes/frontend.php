<?php

use Illuminate\Support\Facades\Route;

// ======================= Home Page ======================= https://preview.eagle-themes.com/html/himara/index.html

Route::get('/','frontend\HomeController@index')->name('home');

Route::get('/about','frontend\HomeController@about')->name('about');

Route::get('/contact','frontend\HomeController@contact')->name('contact');

Route::get('/blog','frontend\PostController@blog')->name('blog');

Route::get('/post/{urlPost}','frontend\PostController@post')->name('post');

Route::get('/list-room/{urlListRoom}','frontend\RoomController@listroom')->name('list-room');

Route::get('/room/{idRoom}','frontend\RoomController@room')->name('room');
