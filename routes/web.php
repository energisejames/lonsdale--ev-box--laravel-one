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


// ESJF : Default Root Landing Page
Route::get('/', function () {
    return view('page.landing-page');
})->name('page.landing-page');

// ESJF : Account-details blade file
Route::get('/account-details', function () {
    return view('page.account-details');
})->name('page.account-details');

// ESJF : My Contracts blade file
Route::get('/my-contracts', function () {
    return view('page.my-contracts');
})->name('page.my-contracts');

// ESJF : Browse Contracts blade file
Route::get('/browse-contracts', function () {
    return view('page.browse-contracts');
})->name('page.browse-contracts');
