<?php

use App\Livewire\Student\Auth\Login;
use App\Livewire\Admin\Login as AdminLogin;
use App\Livewire\DormOwner\Login as DormOwnerLogin;
use App\Livewire\Student\Auth\Register;
use Illuminate\Support\Facades\Route;


// all user entry point
Route::get('/', fn () => view('pages.index'))->name('index');

Route::middleware(['guest'])->group(function(){

    // basic student guest route
    Route::prefix('/student/auth')->group(function(){
        Route::get('/login', Login::class)->name('student.login');
        Route::get('/register', Register::class)->name('student.register');
    });


    // basic dorm-owner guest route
    Route::get('/dorm-owner/auth/login', DormOwnerLogin::class)->name('dorm-owner.login');

    // basic admin guest route
    Route::get('/admin/auth/login', AdminLogin::class)->name('admin.login');

});


