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

    /* Subscriptions */
    Route::group(['prefix' => 'subscription', 'namespace' => 'Subscription', 'middleware' => 'subscription.owner'], function() {

        /* Cancel */
        Route::group(['middleware' => 'subscription.notCancelled'], function() {
            Route::get('/cancel', 'SubscriptionCancelController@index')->name('subscription.cancel.index');
            Route::post('/cancel', 'SubscriptionCancelController@store')->name('subscription.cancel.store');
        });

        /* Resume */
        Route::group(['middleware' => 'subscription.cancelled'], function() {
            Route::get('/resume', 'SubscriptionResumeController@index')->name('subscription.resume.index');
            Route::post('/resume', 'SubscriptionResumeController@store')->name('subscription.resume.store');
        });

        /* Swap plan */
        Route::group(['middleware' => 'subscription.notCancelled'], function() {
            Route::get('/swap', 'SubscriptionSwapController@index')->name('subscription.swap.index');
            Route::patch('/swap', 'SubscriptionSwapController@update')->name('subscription.swap.update');
        });

        /* Card */
        Route::group(['middleware' => 'subscription.customer'], function() {
            Route::get('/card', 'SubscriptionCardController@index')->name('subscription.card.index');
            Route::post('/card', 'SubscriptionCardController@store')->name('subscription.card.store');
        });

        /* Team */
        Route::group(['middleware' => 'subscription.has.team'], function() {
            Route::get('/team', 'SubscriptionTeamController@index')->name('subscription.team.index');
            Route::patch('/team', 'SubscriptionTeamController@update')->name('subscription.team.update');

            Route::post('/team/member', 'SubscriptionTeamMemberController@store')->name('subscription.team.member.store');
            Route::delete('/team/member/{user}', 'SubscriptionTeamMemberController@destroy')->name('subscription.team.member.destroy');
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
