<?php

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'subscription.active']], function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});

/* Account */
Route::group(['prefix' => 'account', 'middleware' => ['auth'], 'as' => 'account.', 'namespace' => 'Account'], function() {
    Route::get('/', 'AccountController@index')->name('index');

    /* Profile */
    Route::get('/profile', 'ProfileController@index')->name('profile.index');
    Route::patch('/profile', 'ProfileController@update')->name('profile.update');

    /* Password */
    Route::get('/password', 'PasswordController@index')->name('password.index');
    Route::patch('/password', 'PasswordController@update')->name('password.update');

    /* Subscription */
    Route::group(['prefix' => 'subscription', 'namespace' => 'Subscription'], function() {

        /* Cancel */
        Route::group(['middleware' => 'subscription.notCancelled'], function() {
            Route::get('/cancel', 'SubscriptionCancelController@index')->name('subscription.cancel.index');
        });

        /* Resume */
        Route::group(['middleware' => 'subscription.cancelled'], function() {
            Route::get('/resume', 'SubscriptionResumeController@index')->name('subscription.resume.index');
        });

        /* Swap plan */
        Route::group(['middleware' => 'subscription.notCancelled'], function() {
            Route::get('/swap', 'SubscriptionSwapController@index')->name('subscription.swap.index');
        });

        /* Card */
        Route::group(['middleware' => 'subscription.customer'], function() {
            Route::get('/card', 'SubscriptionCardController@index')->name('subscription.card.index');
        });
    });
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
Route::group(['prefix' => 'plans', 'as' => 'plans.', 'middleware' => ['subscription.inactive']], function() {
    Route::get('/', 'Subscription\PlansController@index')->name('index');
    Route::get('/members', 'Subscription\PlansController@members')->name('members');
    Route::get('/teams', 'Subscription\PlansController@teams')->name('teams');
});

/* Subscription */
Route::group(['prefix' => 'subscription', 'as' => 'subscription.', 'middleware' => ['auth.register', 'subscription.inactive']], function() {
    Route::get('/', 'Subscription\SubscriptionController@index')->name('index');
    Route::post('/', 'Subscription\SubscriptionController@store')->name('store');
});
