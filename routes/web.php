<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DeviceController;

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\URL;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return response('<h1>Hello world</h1>', 200)
        ->header('Content-Type', 'text/plain');
});

Route::get('/yollo/{id}', function($id) {
    return response(' yollo' . $id);
})->where('id', '[0-9]+');




URL::forceScheme('https');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/devices', [DeviceController::class, 'index']);

    Route::redirect('/', '/clients');
    Route::resource('clients', ClientController::class);
    
    
});

require __DIR__.'/auth.php';
