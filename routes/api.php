<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Http\Request;


Route::post('/register', 'AuthenticationController@register')->name('register');
Route::post('/login', 'AuthenticationController@login')->name('login');

Route::middleware('auth:api')->group(function () {
    Route::get('/logout', 'AuthenticationController@logout')->name('logout');
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
