<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('tengah', function () {
    return view('tengah');
});
Route::get('akhir', function () {
    return view('akhir');
});
