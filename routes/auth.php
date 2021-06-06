<?php

use Illuminate\Support\Facades\Route;

// ======================= Login, Logout, Register, Forgot =======================

Route::get('/login','auth\LoginController@login')->name('login');

Route::post('/check-login','auth\LoginController@checklogin')->name('check-login');

Route::get('/register','auth\LoginController@register')->name('register');

Route::post('/check-register','auth\LoginController@checkregister')->name('check-register');

Route::get('/forgot-password','auth\LoginController@forgotpassword')->name('forgot-password');

Route::post('/send-email-forgot-password','auth\LoginController@checkEmailForgotPassword')->name('send-email-forgot-password');

// ======================= Logout =======================

Route::get('/logout','auth\LoginController@logout')->name('logout');
