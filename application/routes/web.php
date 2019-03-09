<?php

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});

/* Account */
Route::group(['prefix' => 'account', 'middleware' => ['auth'], 'as' => 'account.'], function() {
    Route::get('/', 'Account\AccountController@index')->name('index');

    /* Profile */
    Route::get('/profile', 'Account\ProfileController@index')->name('profile.index');
    Route::patch('/profile', 'Account\ProfileController@update')->name('profile.update');

    /* Password */
    Route::get('/password', 'Account\PasswordController@index')->name('password.index');
    Route::patch('/password', 'Account\PasswordController@update')->name('password.update');
});

/* Activation activation */
Route::group(['prefix' => 'activation', 'as' => 'activation.'], function() {
    Route::get('/resend', 'Auth\ActivationResendController@index')->name('resend');

    // Whenever we receive a confirmationToken in the url we need to resolve this to a ConfirmationToken model
    // @see RouteServiceProvider
    Route::get('/{confirmationToken}', 'Auth\ActivationController@activate')->name('activate');
});
