<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\AddressController;
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

Route::get('/welcome', function () {
    return view('welcome'); 
})->name('welcome');

Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');

Route::get('/dashboard', function () {
    return view('dashboard'); 
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::get('/clients', function () {
    return view('dashboard'); 
})->middleware(['auth', 'verified'])->name('clients.index');

Route::get('/devices', function () {
    return view('dashboard'); 
})->middleware(['auth', 'verified'])->name('devices');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/addresses', [DeviceController::class, 'index'])->name('addresses.index');
    Route::get('/devices', [DeviceController::class, 'index'])->name('devices.index');
    Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');

    Route::resource('clients', ClientController::class);


    Route::redirect('/', '/dashboard');

});

require __DIR__.'/auth.php';
