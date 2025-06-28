<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/find-project/{id}', [WelcomeController::class, 'findProject'])->name('find.project');
Route::get('/download-resume', [WelcomeController::class, 'downloadResume'])->name('download.resume');
