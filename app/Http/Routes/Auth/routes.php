<?php

Route::group(['middleware' => 'auth'], function () {
    // Logs
    Route::get('logs', [
        'as'   => 'logs',
        'uses' => '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index',
    ]);
});
