<?php

use App\Http\Controllers\Explore;
use Illuminate\Support\Facades\Route;


// all user entry point
Route::get('/', fn()=> view('pages.index'))->name('index');

Route::middleware(['auth:web'])->group(function(){
    Route::get('/explore', [Explore::class, 'index'])->name('explore');
    Route::get('explore/dorm/{slug}', [Explore::class, 'singleDorm'])->name('explore.single-dorm');
    Route::get('/explore/compare-dorm', fn()=>view('pages.compare'))->name('explore.compare');
});


