<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/', function(){return view('dev');})->name('dev');
Route::get('/blog', function(){return view('blog');})->name('blog');
Route::get('/shop', function(){return view('shop');})->name('shop');
Route::get('/skills', function(){return view('skills');})->name('skills');
Route::get('/contact', function(){return view('contact');})->name('contact');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','sudhuadminallowed'])->group(function () {
    Route::get('/admin', function(){return view('admin.dashboard');})->name('admin');

    Route::get('/admin/post/create', [AdminPostController::class, 'create'])->name('addpost');
    Route::post('/admin/post/create', [AdminPostController::class, 'save'])->name('savepost');
    Route::get('/admin/post/view', [AdminPostController::class, 'view'])->name('viewpost');

    Route::get('/admin/categories/view', [CategoryController::class, 'view'])->name('category');
    Route::post('/admin/categories/saveCat', [CategoryController::class, 'saveCat'])->name('saveCat');
    
});

require __DIR__.'/auth.php';

