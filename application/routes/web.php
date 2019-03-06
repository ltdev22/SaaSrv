<?php

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::group(['prefix' => 'account', 'middleware' => ['auth'], 'as' => 'account.'], function() {
    Route::get('/', 'Account\AccountController@index')->name('index');
});
