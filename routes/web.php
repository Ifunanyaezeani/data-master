<?php

use App\Livewire\Student\Login;
use App\Livewire\Admin\Login as AdminLogin;
use App\Livewire\DormOwner\Login as DormOwnerLogin;
use Illuminate\Support\Facades\Route;


// all user entry point
Route::get('/', fn () => view('pages.index'))->name('index');

Route::middleware(['guest'])->group(function(){

    // basic student guest route
    Route::get('/student/auth/login', Login::class)->name('student.login');

    // basic dorm-owner guest route
    Route::get('/dorm-owner/auth/login', DormOwnerLogin::class)->name('dorm-owner.login');

    // basic admin guest route
    Route::get('/admin/auth/login', AdminLogin::class)->name('admin.login');

});


