<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('transactions/create', 'TransactionController@create');

// Transactions
    // Create
        Route::get('transactions/create', 'TransactionController@create')->name('transaction.create');
        Route::post('transactions/store', 'TransactionController@store')->name('transaction.store');
