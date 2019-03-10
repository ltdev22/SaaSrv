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

/* Activation account */
Route::group(['prefix' => 'activation', 'as' => 'activation.', 'middleware' => ['guest']], function() {
    Route::get('/resend', 'Auth\ActivationResendController@index')->name('resend');
    Route::post('/resend', 'Auth\ActivationResendController@send')->name('resend.send');

    // Whenever we receive a confirmationToken in the url we need to resolve this to a ConfirmationToken model
    // @see RouteServiceProvider
    Route::get('/{confirmationToken}', 'Auth\ActivationController@activate')->name('activate');
});

/* Plans */
Route::group(['prefix' => 'plans', 'as' => 'plans.'], function() {
    Route::get('/', 'Subscription\PlansController@index')->name('index');
    Route::get('/members', 'Subscription\PlansController@members')->name('members');
    Route::get('/teams', 'Subscription\PlansController@teams')->name('teams');
});

/* Subscription */
Route::group(['prefix' => 'subscription', 'as' => 'subscription.', 'middleware' => ['auth.register']], function() {
    Route::get('/', 'Subscription\SubscriptionController@index')->name('index');
    Route::post('/', 'Subscription\SubscriptionController@store')->name('store');
});
