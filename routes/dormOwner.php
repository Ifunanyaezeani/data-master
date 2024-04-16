<?php


use Illuminate\Support\Facades\Route;
use App\Livewire\DormOwner\Auth\Login as DormOwnerLogin;
use App\Livewire\DormOwner\Auth\Register;
use App\Livewire\DormOwner\Dashboard\Index;

Route::middleware(['guest:dorm_owner'])->prefix('/dorm-owner/auth')->group(function () {
    // basic dorm-owner guest route
    Route::get('/login', DormOwnerLogin::class)->name('dorm-owner.login');
    Route::get('/register', Register::class)->name('dorm-owner.register');
});

Route::middleware(['auth:dorm_owner'])->prefix('/dashboard')->group(function () {
    Route::get('/', Index::class)->name('dorm-owner.dashboard');
});
