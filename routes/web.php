<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('check', function() {
   dd(Auth::user());
});

Route::group(['namespace' => 'Base'], function(){

    // Login Routes
    Route::get('/', 'LoginController@index');
    Route::get('login', 'LoginController@index')->middleware('guest');
    Route::post('login', 'LoginController@authenticate')->middleware('guest');
    Route::get('logout', 'LoginController@logout')->middleware('auth');

    // Account Routes
    Route::get('accounts',
        [
            'as'            => 'accounts.index',
            'uses'          => 'AccountController@index',
            'middleware'    => ['auth', 'isCashier']
        ]
    );
    Route::get('account/create',
        [
            'as'            => 'accounts.create',
            'uses'          => 'AccountController@create',
            'middleware'    => ['auth', 'isCashier']
        ]
    );
    Route::post('account/create',
        [
            'as'            => 'accounts.store',
            'uses'          => 'AccountController@store',
            'middleware'    => ['auth', 'isCashier']
        ]
    );
    Route::get('account/{id}',
        [
            'as'            => 'accounts.show',
            'uses'          => 'AccountController@show',
            'middleware'    => ['auth', 'isCashier']
        ]
    );

    // Transaction Routes
    Route::get('transactions',
        [
            'as'            => 'transactions.index',
            'uses'          => 'TransactionController@index',
            'middleware'    => 'auth'
        ]
    );
    Route::get('transactions/create',
        [
            'as'            => 'transactions.create',
            'uses'          => 'CashierController@addTransaction',
            'middleware'    => ['auth', 'isCashier']
        ]
    );
    Route::post('transactions/create',
        [
            'as'            => 'transactions.store',
            'uses'          => 'TransactionController@store',
            'middleware'    => ['auth', 'isCashier']
        ]
    );
    Route::get('transactions/{id}',
        [
            'as'            => 'transactions.show',
            'uses'          => 'TransactionController@show',
            'middleware'    => ['auth', 'isCashier']
        ]
    );
    Route::get('transactions/{id}/edit',
        [
            'as'            => 'transactions.edit',
            'uses'          => 'TransactionController@edit',
            'middleware'    => ['auth', 'isCashier']
        ]
    );
    Route::PATCH('transactions/{id}',
        [
            'as'            => 'transactions.update',
            'uses'          => 'TransactionController@update',
            'middleware'    => ['auth', 'isCashier']
        ]
    );

    // Payment Routes
    Route::get('transactions/{tid}/payments',
        [
            'as'            => 'payments.index',
            'uses'          => 'PaymentController@create',
            'middleware'    => 'auth'
        ]
    );
    Route::get('transactions/{tid}/payments/create',
        [
            'as'            => 'payments.create',
            'uses'          => 'CashierController@addPayment',
            'middleware'    => ['auth', 'isCashier']
        ]
    );
    Route::post('transactions/{tid}/payments/create',
        [
            'as'            => 'payments.store',
            'uses'          => 'PaymentController@store',
            'middleware'    => ['auth', 'isCashier']
        ]
    );
    Route::get('transactions/{tid}/payments/{pid}',
        [
            'as'            => 'payments.show',
            'uses'          => 'PaymentController@show',
            'middleware'    => ['auth', 'isCashier']
        ]
    );
    Route::get('transactions/{tid}/payments/{pid}/edit',
        [
            'as'            => 'payments.edit',
            'uses'          => 'PaymentController@edit',
            'middleware'    => ['auth', 'isCashier']
        ]
    );
    Route::patch('transactions/{tid}/payments/{pid}',
        [
            'as'            => 'payments.update',
            'uses'          => 'PaymentController@update',
            'middleware'    => ['auth', 'isCashier']
        ]
    );

    // Dashboard Routes
    Route::get('cashier/dashboard',
        [
            'as'            => 'CashierController.dashboard',
            'uses'          => 'CashierController@dashboard',
            'middleware'    => 'auth'
        ]
    );

    Route::get('client/dashboard',
        [
            'as'            => 'client.dashboard',
            'uses'          => 'ClientController@dashboard',
            'middleware'    => 'auth'
        ]
    );

});
