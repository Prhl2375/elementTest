<?php

use App\Http\Controllers\Movie\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MovieController::class, 'showAction'])->name('movies.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
