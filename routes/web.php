<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

// my pages
Route::get('/', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies', [MoviesController::class, 'show'])->name('movies.show');






