<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/reporting', function () {
    return 'Reporting feature';
});

Route::resource('reports', 'ReportsController');
