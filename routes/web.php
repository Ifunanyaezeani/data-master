<?php

use Illuminate\Support\Facades\Route;


// all user entry point
Route::get('/', fn()=> view('pages.index'))->name('index');

Route::middleware(['auth:web'])->group(function(){
    Route::get('/explore', fn () => view('pages.explore'))->name('explore');
});


