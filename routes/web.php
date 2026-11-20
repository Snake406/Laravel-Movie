<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MovieController;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [MovieController::class,'index'])->name('index');

Route::get('/create', [MovieController::class,'create'])->name('create');

Route::get('/details/{id}', [MovieController::class,'details'])->name('details');
