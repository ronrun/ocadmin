<?php

use Illuminate\Support\Facades\Route;

Route::prefix('ocadmin')->group(function () {
    Route::get('/', function () {
        return view('ocadmin.dashboard');
    });
});
