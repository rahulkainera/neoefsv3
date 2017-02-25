<?php

Route::get('/', function () {
    return view('welcome');
});
Route::resource('Home','welcome');
Route::resource('customers','CustomerController');
Route::resource('stocks','StockController');
Route::resource('investments','InvestmentController');
Route::resource('mutualfunds','MutualfundController');

Route::get('profile', function () {
    // Only authenticated users may enter...
})->middleware('auth');

Route::auth();

Route::get('/home', 'HomeController@index');
// With A Route Closure...

Route::get('profile', ['middleware' => 'auth', function()
{
    // Only authenticated users may enter...
}]);