<?php


use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Login as AdminLogin;


Route::middleware(['guest:admin'])->group(function () {
    // basic admin guest route
    Route::get('/admin/auth/login', AdminLogin::class)->name('admin.login');
});
