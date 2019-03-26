<?php

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'subscription.active']], function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});

/* Administrators */
Route::group(['middleware' => ['auth', 'administrator'], 'prefix' => 'administrator', 'as' => 'admin.', 'namespace' => 'Administrator'], function() {
    Route::get('/impersonate', 'ImpersonateController@index')->name('impersonate.index');
    Route::post('/impersonate', 'ImpersonateController@start')->name('impersonate.start');
});

/**
 * This route technically belongs to the Administrators route group.
 *
 * The reason we keep this route out of the Administrators route group is that when the admin is impersonating he is temporary
 * logged in as a customer, so the administrator middleware will kick him out of this group and won't be able to stop the impersonation.
 */
Route::delete('administrator/impersonate', 'Administrator\ImpersonateController@stop')->name('admin.impersonate.stop');

/* Guest, not logged in users */
Route::group(['middleware' => 'guest'], function() {
    Route::get('/login/twofactor', 'Auth\TwoFactorLoginController@index')->name('login.twofactor.index');
    Route::post('/login/twofactor', 'Auth\TwoFactorLoginController@verify')->name('login.twofactor.verify');
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

    /* Deactivate */
    Route::get('/deactivate', 'DeactivateController@index')->name('deactivate.index');
    Route::patch('/deactivate', 'DeactivateController@update')->name('deactivate.update');

    /* TwoFactor */
    Route::get('/twofactor', 'TwoFactorController@index')->name('twofactor.index');
    Route::post('/twofactor', 'TwoFactorController@store')->name('twofactor.store');
    Route::post('/twofactor/verify', 'TwoFactorController@verify')->name('twofactor.verify');
    Route::delete('/twofactor', 'TwoFactorController@destroy')->name('twofactor.destroy');

    /* Subscriptions */
    Route::group(['prefix' => 'subscription', 'namespace' => 'Subscription', 'as' => 'subscription.', 'middleware' => 'subscription.owner'], function() {

        /* Cancel */
        Route::group(['middleware' => 'subscription.notCancelled'], function() {
            Route::get('/cancel', 'SubscriptionCancelController@index')->name('cancel.index');
            Route::post('/cancel', 'SubscriptionCancelController@store')->name('cancel.store');
        });

        /* Resume */
        Route::group(['middleware' => 'subscription.cancelled'], function() {
            Route::get('/resume', 'SubscriptionResumeController@index')->name('resume.index');
            Route::post('/resume', 'SubscriptionResumeController@store')->name('resume.store');
        });

        /* Swap plan */
        Route::group(['middleware' => 'subscription.notCancelled'], function() {
            Route::get('/swap', 'SubscriptionSwapController@index')->name('swap.index');
            Route::patch('/swap', 'SubscriptionSwapController@update')->name('swap.update');
        });

        /* Card */
        Route::group(['middleware' => 'subscription.customer'], function() {
            Route::get('/card', 'SubscriptionCardController@index')->name('card.index');
            Route::post('/card', 'SubscriptionCardController@store')->name('card.store');
        });

        /* Team */
        Route::group(['middleware' => 'subscription.has.team'], function() {
            Route::get('/team', 'SubscriptionTeamController@index')->name('team.index');
            Route::patch('/team', 'SubscriptionTeamController@update')->name('team.update');

            Route::post('/team/member', 'SubscriptionTeamMemberController@store')->name('team.member.store');
            Route::delete('/team/member/{user}', 'SubscriptionTeamMemberController@destroy')->name('team.member.destroy');
        });
    });
});

/* Activation account */
Route::group(['prefix' => 'activation', 'as' => 'activation.', 'middleware' => ['guest']], function() {
    Route::get('/resend', 'Auth\ActivationResendController@index')->name('resend');
    Route::post('/resend', 'Auth\ActivationResendController@send')->name('resend.send');

    // Whenever we receive a confirmationToken in the url we need to resolve this to a ConfirmationToken model
    // @see RouteServiceProvider
    Route::get('/{confirmation_token}', 'Auth\ActivationController@activate')->name('activate');
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
