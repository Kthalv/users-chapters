<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminAuthController;
use App\Models\User;
use App\Models\Chapter;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChapterController;



Route::get('/', function () {
    return view('welcome');
});

// Show all users
Route::get('/users', [UserController::class, 'showAllUsers'])->name('showAllUsers');


// Create user routes
Route::get('users/create', [UserController::class, 'createUser'])->name('createUser');
Route::post('/users/store', [UserController::class, 'storeUser'])->name('storeUser');


// View, Edit, Update, and Delete users
Route::get('users/{id}', [UserController::class, 'viewUser'])->name('viewUser');
Route::get('users/{id}/edit', [UserController::class, 'editUser'])->name('editUser');
Route::put('users/{id}/update', [UserController::class, 'updateUser'])->name('updateUser');
Route::delete('users/{id}/delete', [UserController::class, 'deleteUser'])->name('deleteUser');

// Show all chapters
Route::get('/chapters', [ChapterController::class, 'showAllChapters'])->name('showAllChapters');


// Create chapter routes
Route::get('chapters/create', [ChapterController::class, 'createChapter'])->name('createChapter');
Route::post('/chapters/store', [ChapterController::class, 'storeChapter'])->name('storeChapter');


// View, Edit, Update, and Delete chapters
Route::get('chapters/{id}', [ChapterController::class, 'viewChapter'])->name('viewChapter');
Route::get('chapters/{id}/edit', [ChapterController::class, 'editChapter'])->name('editChapter');
Route::put('chapters/{id}/update', [ChapterController::class, 'updateChapter'])->name('updateChapter');
Route::delete('chapters/{id}/delete', [ChapterController::class, 'deleteChapter'])->name('deleteChapter');

// Admin
// Show the login form
Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');

// Handle the login form submission
Route::post('admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

Route::get('admin/dashboard', function () {
    return view('admin.dashboard'); // This view should be created
})->name('admin.dashboard');


// Protected admin dashboard route
Route::middleware('auth:admin')->group(function () {
    Route::get('admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});