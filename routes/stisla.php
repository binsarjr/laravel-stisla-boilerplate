<?php

use Illuminate\Support\Facades\Route;

Route::get('blank', function () {
    return view('stisla.pages.blank');
})->name('blank');

Route::group(['prefix' => 'bootstrap-components', 'as' => 'bootstrap-components.'], function () {
    Route::get('alert', function () {
        return view('stisla.pages.bootstrap-components.alert');
    })->name('alert');
});
