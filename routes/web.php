<?php

use Illuminate\Support\Facades\Route;


// all user entry point
Route::get('/', fn()=> view('pages.index'))->name('index');

Route::middleware(['auth:web'])->group(function(){
    Route::get('/explore', fn () => view('pages.explore'))->name('explore');
    Route::get('explore/dorm/', fn () => view('pages.single-dorm'))->name('explore.single-dorm');
    Route::get('/explore/dorm/compare', fn()=>view('pages.compare'))->name('explore.compare');
});


