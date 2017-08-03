<?php

//Wizard Sponsor Submit
Route::get('/', 'SponsorController@createWizard');
Route::post('/sponsor', 'SponsorController@store');
Route::get('/home', 'HomeController@index')->name('home');

//Route auth bawaan artisan make auth
Auth::routes();

//Admin Dashboard
Route::middleware(['auth'])->prefix('admin')->group(function (){
    Route::get('/', 'DashboardController@show')->name('dashboard');// Matches The "/admin" URL
    Route::get('sponsor-list', 'SponsorController@index')->name('sponsor-list');
});

// bagian dashboard khusus super admin
Route::middleware(['superadmin'])->prefix('admin')->group(function (){
    Route::resource('user', 'UserController');
});
