<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/', function(){return view('dev');})->name('dev');

Route::get('/adminseeuser', function(){return view('admin.users.view');})->name('adminSeeUser');

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/shop', [ProductController::class, 'shop'])->name('shop');

Route::get('/skills', [CategoryController::class, 'skills'])->name('skills');
Route::get('/skills/{id}', [CategoryController::class, 'viewSkillProject'])->name('viewSkillProject');

Route::get('/contact', function(){return view('contact');})->name('contact');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','sudhuadminallowed'])->group(function () {
    Route::get('/admin', function(){return view('admin.dashboard');})->name('admin');

    Route::get('/admin/posts/create', [AdminPostController::class, 'create'])->name('addpost');
    Route::post('/admin/posts/create', [AdminPostController::class, 'save'])->name('savepost');
    Route::get('/admin/posts/view', [AdminPostController::class, 'view'])->name('viewpost');
    Route::get('/admin/posts/view/{id}', [AdminPostController::class, 'deletePost'])->name('deletePost');


    Route::get('/admin/categories/view', [CategoryController::class, 'view'])->name('category');
    Route::post('/admin/categories/saveCat', [CategoryController::class, 'saveCat'])->name('saveCat');
    Route::get('/admin/categories/view/{id}', [CategoryController::class, 'deleteCat'])->name('deleteCat');

    Route::get('/admin/product/create', [ProductController::class, 'create'])->name('addProduct');
    Route::get('/admin/product/view', [ProductController::class, 'index'])->name('viewProduct');
    Route::post('/admin/product/save', [ProductController::class, 'save'])->name('saveProduct');
    
});



require __DIR__.'/auth.php';

