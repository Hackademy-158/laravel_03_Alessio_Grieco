<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');
Route::get('/anime/{id}', [PublicController::class, 'detail'])->name('anime.detail');
