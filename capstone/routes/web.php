<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('loggedOut/seemore');
});

Route::get('/loggedOut/seemore', function () {
    return view('loggedOut/seemore');
})->name('loggedOut/seemore');

Route::get('/loggedOut/seemore', function () {
    return view('loggedOut/seemore');
})->name('loggedOut/seemore');
