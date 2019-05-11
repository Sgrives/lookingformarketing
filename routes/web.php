<?php

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/subscribe', 'WelcomeController@subscribe')->name('subscribe');
Route::get('/case-studies', 'CasestudyController@index')->name('casestudies');
Route::get('/shop', 'ShopController@index')->name('shop');
Route::view('help', 'pages.help');

Route::get('news', 'NewsController@index');

// Jobs
Route::get('/jobs/create/preview/{record}', 'JobController@preview')->name('jobs.preview');
Route::get('/jobs/create/purchase/{record}', 'JobController@purchase')->name('jobs.purchase');
Route::get('/jobs/create/thankyou/{record}', 'JobController@thankyou')->name('jobs.thankyou');
Route::post('/jobs/purchased/{record}', 'JobController@purchased')->name('jobs.purchased');
Route::resource('jobs', 'JobController');

Route::get('jobs/company/{slug}', 'CompanyController@show')->name('company.show');
Route::get('jobs/category/{category}', 'CategoryController@show')->name('category.show');
Route::get('jobs/type/{type}', 'TypeController@show')->name('type.show');
Route::get('jobs/desk/{desk}', 'DeskController@show')->name('desk.show');
Route::get('jobs/location/{slug}', 'LocationController@show')->name('location.show');

// Resources
Route::resource('events', 'EventController');
Route::resource('books', 'BookController');
Route::get('/guides', 'GuidePublicController@index')->name('public.guides.index');
Route::get('/guides/on/{slug}', 'GuidePublicController@show')->name('public.guides.show');

// Guide - Tags
// Route::get('/guides/on/{tag}', 'TagController@index');

// Auth
Auth::routes();

// Admin Resources
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('guides', 'GuideController');
    Route::get('home', 'HomeController@index')->name('home');
});