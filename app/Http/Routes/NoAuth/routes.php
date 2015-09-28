<?php

// Home Page
Route::get('/', [
    'as'         => 'home',
    'uses'       => 'HomeController@index',
    'middleware' => 'active:home',
]);