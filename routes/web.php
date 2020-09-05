<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.welcome');
});

Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/tweets', 'TweetController@index')->name('home');
    Route::post('/tweet','TweetController@store');
    Route::post('/tweets/{tweet}/like','TweetLikeController@store');
    Route::delete('/tweets/{tweet}/like','TweetLikeController@destroy');
    Route::get('/profile/edit/{user:username}','ProfileController@edit')->middleware('can:edit,user');
    Route::Patch('/profile/edit/{user:username}','ProfileController@update')->middleware('can:edit,user');
    Route::get('/profile/{user:username}','ProfileController@show')->name('profile');
    Route::post('/profile/{user:username}/follow','FollowController@store');
    Route::get('explore','ExploreController');
});






