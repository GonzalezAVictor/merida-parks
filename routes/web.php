<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('parks/{park_id}', 'ParkController@show')->name('park-details');