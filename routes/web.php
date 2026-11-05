<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/colleges', function () {
    return view('pages.college-finder');
})->name('colleges.index');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/cutoff-calculator', function () {
    return view('pages.cutoff-calculator');
})->name('cutoff.calculator');

Route::get('/colleges/{slug}', function ($slug) {
    return view('pages.college-detail', compact('slug'));
})->name('colleges.show');

Route::get('/terms', function () {
    return view('pages.terms');
})->name('terms');

Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
})->name('privacy');



