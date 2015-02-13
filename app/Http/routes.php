<?php

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', [
        'as'   => 'home',
        'uses' => 'HomeController@index'
    ]);
});

include_once(base_path() . '/vendor/nukacode/core/src/routes.php');