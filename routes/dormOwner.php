<?php


use Illuminate\Support\Facades\Route;
use App\Livewire\DormOwner\Login as DormOwnerLogin;


Route::middleware(['guest:admin'])->group(function () {
    // basic dorm-owner guest route
    Route::get('/dorm-owner/auth/login', DormOwnerLogin::class)->name('dorm-owner.login');
});
