<?php

use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('Pages.aboutDev');});
Route::get('/gallery', function () { return view('Pages.gallery');});
Route::get('/blog', function () { return view('Pages.blog');});
Route::get('/contact', function () { return view('Pages.contact');});
Route::get('/services', function () { return view('Pages.services');});
Route::get('/projects', function () { return view('Pages.projects');});

Route::get('/me-admin', [Admin::class,'index']);