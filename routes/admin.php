<?php

use App\Livewire\Admin\Dashboard\Index;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Login as AdminLogin;


Route::middleware(['guest:admin'])->group(function () {
    // basic admin guest route
    Route::get('/admin/login', AdminLogin::class)->name('admin.login');
});

Route::middleware(['auth:admin'])->group(function () {
    // basic admin guest route
    Route::get('/admin', Index::class)->name('admin');
});
