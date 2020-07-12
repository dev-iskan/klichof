<?php

Route::get('/', 'FrontController@main')->name('main');
Route::get('/about_us', 'FrontController@aboutUs')->name('about_us');
Route::prefix('services')->group(function () {
    Route::get('/document', 'FrontController@document')->name('document');
    Route::get('/construction', 'FrontController@construction')->name('construction');
    Route::get('/management', 'FrontController@management')->name('management');
    Route::get('/organization', 'FrontController@organization')->name('organization');
});


Route::post('contact_us', 'ContactUsController@send')->name('contact_us.send');
