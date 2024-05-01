<?php

use App\Http\Controllers\Explore;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Dashboard\Index;
use App\Livewire\Admin\Dashboard\Students;
use App\Livewire\Admin\Login as AdminLogin;
use App\Livewire\Admin\Dashboard\DormOwners;
use App\Livewire\Admin\Dashboard\Dormitories;
use App\Livewire\Admin\Dashboard\DormOwnerDetails;
use App\Livewire\Admin\Dashboard\StudentDetails;

Route::middleware(['guest:admin'])->group(function () {
    // basic admin guest route
    Route::get('/admin/login', AdminLogin::class)->name('admin.login');
});

Route::middleware(['auth:admin'])->prefix('/admin')->group(function () {
    // basic admin guest route
    Route::get('/', Index::class)->name('admin');

    Route::get('/dormitory-owners', DormOwners::class)->name('admin.dorm-owners');
    Route::get('/dormitory-owner/{id}/details', DormOwnerDetails::class)->name('admin.dorm-owner.details');

    Route::get('/students', Students::class)->name('admin.students');
    Route::get('/student/{id}/details', StudentDetails::class)->name('admin.student.details');

    Route::get('/dormitories', Dormitories::class)->name('admin.dormitories');
    Route::get('/dorm/{slug}', [Explore::class, 'singleDorm'])->name('admin.single-dorm');
});
