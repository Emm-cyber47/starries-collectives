<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AdminContentController;

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

// Authentication routes
Auth::routes();

// Frontend Routes
Route::get('/', [FrontendController::class, 'index']);
Route::post('/submit', [FrontendController::class, 'submitform'])->name('submit');

Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('/gallery', [FrontendController::class, 'doctors'])->name('frontend.doctors');
Route::get('/news', [FrontendController::class, 'news'])->name('frontend.news');

// Admin Routes (Requires Authentication)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('contents', AdminContentController::class);
    
    // Admin Dashboard (Requires 'admin' middleware)
    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    });
});

// General Dashboard (For Normal Users)
Route::middleware(['auth'])->get('/dashboard', [BackendController::class, 'index'])->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
