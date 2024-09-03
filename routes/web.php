<?php

use App\Livewire\Post\PostEditor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/', function () {
    return view('dev');
})->name('dev');

Route::get('/seeusers', [AdminUserController::class, 'viewUser'])->name('adminSeeUser');
Route::get('/viewpost/{post}', [PostController::class, 'viewPost'])->name('openPost');

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/work', [ProductController::class, 'work'])->name('work');

Route::get('/skills', [CategoryController::class, 'skills'])->name('skills');
Route::get('/skills/{id}', [CategoryController::class, 'viewSkillProject'])->name('viewSkillProject');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('posts/{post}/edit', [AdminPostController::class, 'edit'])->name('posts.edit');
});

Route::middleware(['auth', 'sudhuadminallowed'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin');

    Route::resource('postsControl', AdminPostController::class);


    Route::get('/admin/categories/view', [CategoryController::class, 'view'])->name('category');
    Route::post('/admin/categories/saveCat', [CategoryController::class, 'saveCat'])->name('saveCat');
    Route::get('/admin/categories/view/{id}', [CategoryController::class, 'deleteCat'])->name('deleteCat');

    Route::get('/admin/product/create', [ProductController::class, 'create'])->name('addProduct');
    Route::get('/admin/product/view', [ProductController::class, 'index'])->name('viewProduct');
    Route::post('/admin/product/save', [ProductController::class, 'save'])->name('saveProduct');
    // on the user area 
    Route::get('/products/{id}', [ProductController::class, 'viewSingleProduct'])->name('viewSingleProduct');

});



require __DIR__ . '/auth.php';

