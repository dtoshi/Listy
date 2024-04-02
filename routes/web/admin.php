<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})
    ->middleware('auth.admin')
    ->name('admin.dashboard');