<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/main','MainController@index');
Route::post('/main/checklogin','MainController@checklogin');
Route::get('/main/successlogin','MainController@successlogin');
Route::get('/main/logout','MainController@logout');

 
