<?php

/**
* Log viewer
* (only accessible locally)
*/
if(config('app.env') == 'local') {
    Route::get('/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}

/* Form submission page */

Route::get('/', 'CalcController@index');

/* Results page */

Route::post('/results', 'FormController@calculate');
