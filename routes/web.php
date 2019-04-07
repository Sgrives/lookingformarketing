<?php

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/subscribe', 'WelcomeController@subscribe')->name('subscribe');
Route::get('/guides', 'GuideController@index')->name('guides');
Route::get('/guides/{tag}/{slug}', 'GuideController@show');
Route::get('/guides/{tag}', 'TagController@index');
Route::get('/case-studies', 'CasestudyController@index')->name('casestudies');
Route::get('/shop', 'ShopController@index')->name('shop');
Route::view('help', 'pages.help');

// Books
Route::resource('books', 'BookController');

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

// Events
Route::resource('events', 'EventController');

// Auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
