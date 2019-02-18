<?php

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/subscribe', 'WelcomeController@subscribe')->name('subscribe');
Route::get('/guides', 'GuideController@index')->name('guides');
Route::get('/guides/{tag}/{slug}', 'GuideController@show');
Route::get('/case-studies', 'CasestudyController@index')->name('casestudies');
Route::get('/shop', 'ShopController@index')->name('shop');
Route::view('help', 'pages.help');

Route::get('/jobs/create/preview/{record}', 'JobController@preview')->name('jobs.preview');
Route::get('/jobs/create/purchase/{record}', 'JobController@purchase')->name('jobs.purchase');
Route::get('/jobs/create/thankyou/{record}', 'JobController@thankyou')->name('jobs.thankyou');
Route::post('/jobs/purchased/{record}', 'JobController@purchased')->name('jobs.purchased');
Route::resource('jobs', 'JobController');

Route::get('/company/{slug}', 'CompanyController@show')->name('company.show');
Route::get('/category/{category}', 'CategoryController@show')->name('category.show');
Route::get('/type/{type}', 'TypeController@show')->name('type.show');
Route::get('/desk/{desk}', 'DeskController@show')->name('desk.show');
Route::get('/location/{location}', 'LocationController@show')->name('location.show');

// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');
