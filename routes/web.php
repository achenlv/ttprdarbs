<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\URL;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', '/clients');
Route::resource('clients', ClientController::class);

URL::forceScheme('https');