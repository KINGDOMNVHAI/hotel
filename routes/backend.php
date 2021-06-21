<?php

use Illuminate\Support\Facades\Route;

// ======================= Admin Page =======================

Route::get('/profile','backend\ProfileController@index')->name('profile');

Route::get('/list-room','backend\RoomController@listroom')->name('list-room'); //có dùng để search phòng

Route::match(['GET', 'POST'], '/create-room', 'backend\RoomController@createroom')->name('create-room');

Route::get('/update/{url}','backend\RoomController@update')->name('update');

Route::post('/edit/{url}','backend\RoomController@edit')->name('edit');

Route::get('/delete/{url}','backend\RoomController@delete')->name('delete');

Route::get('/list-booking','backend\BookingController@listbooking')->name('list-booking');
