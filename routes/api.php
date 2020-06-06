<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('media', 'MediaController@store');
Route::put('media', 'MediaController@storeMany');

Route::get('users/me', 'UserController@me');
Route::get('users/{user}', 'UserController@show');

Route::prefix('events')->group(function () {
    Route::post('{event}/comment', 'EventController@comment');
    Route::post('{event}/karmaUp', 'EventController@karmaUp');
    Route::post('{event}/karmaDown', 'EventController@karmaDown');
    Route::post('{event}/rate', 'EventController@rate');
    Route::post('{event}/unrate', 'EventController@unrate');
});
Route::apiResource('events', 'EventController')
    ->except('destroy');

Route::prefix('initiatives')->group(function () {
//    Route::post('{initiative}/comment', 'EventController@comment');
    Route::post('{initiative}/rate', 'InitiativeController@rate');
    Route::post('{initiative}/unrate', 'InitiativeController@unrate');
});
Route::apiResource('initiatives', 'InitiativeController')
    ->except('destroy');

Route::prefix('posts')->group(function () {
    Route::post('{post}/comment', 'PostController@comment');
    Route::post('{post}/karmaUp', 'PostController@karmaUp');
    Route::post('{post}/karmaDown', 'PostController@karmaDown');
});
Route::apiResource('posts', 'PostController')
    ->except('destroy');

Route::prefix('comments')->group(function () {
    Route::post('{comment}/karmaUp', 'CommentController@karmaUp');
    Route::post('{comment}/karmaDown', 'CommentController@karmaDown');
});
