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
use App\Mail\NewUserWelcomeMail;


Auth::routes();

// temp url for email template
Route::get('/email', function() {
    return new NewUserWelcomeMail();
});

// follow user

Route::post('/follow/{user}', 'FollowsController@store')->name('follow.store');
// Profile
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');


// Post Route
Route::get('/', 'PostsController@index')->name('p.index');
Route::get('/p/create', 'PostsController@create')->name('p.create');
Route::post('/p', 'PostsController@store')->name('p.store');
Route::get('/p/{post}', 'PostsController@show')->name('p.show');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
