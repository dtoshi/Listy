<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/home-admin', [AdminController::class, 'index'])
->name('admin.index');
