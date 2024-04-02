<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})
    ->name('home');

Route::get('/register-view', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register-view', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/login-view', [SessionController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login-view', [SessionController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::prefix('administrador')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.index');
    });

    require base_path('routes/web/admin.php');
});