<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Emba\ContactForm\Http\Controllers', 'middleware' => ['web']], function(){
    Route::get('contact', 'ContactFormController@index');
    Route::post('contact', 'ContactFormController@sendMail')->name('contact');
});
