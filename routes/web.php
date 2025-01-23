<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\AdminContentController;
Route::get('/', [PageController::class, 'home'])->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
// Admin Routes
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');
    Route::resource('users', UserController::class);
    Route::get('/content', [ContentController::class, 'index'])->name('admin.content.index');
    Route::get('/content/{id}/edit', [ContentController::class, 'edit'])->name('admin.content.edit');
    Route::put('/content/{id}', [ContentController::class, 'update'])->name('admin.content.update');

Route::get('/admin/content', [AdminContentController::class, 'index'])->name('admin.content');
Route::post('/admin/content/update', [AdminContentController::class, 'update'])->name('admin.update');
});
