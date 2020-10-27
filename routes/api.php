<?php

use Illuminate\Support\Facades\Route;


/*<----------------------------------------------------------------------------------------------------->*/
/* Autentication */
Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');

/* Authorization */
Route::group(['middleware' => ['jwt.verify']], function () {

    Route::get('user', 'AuthController@bioProfile');
    Route::post('logout', 'AuthController@logout');
    Route::post('/refresh/token', 'AuthController@refresh');
    Route::get('/book', 'MessageController@book');
    
});
