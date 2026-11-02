<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/colleges', function () {
    return view('pages.college-finder');
})->name('colleges.index');

Route::get('/college-finder', function () {
    return redirect()->route('colleges.index');
});

