<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/leaderboard', [APIController::class, 'GetData']);

// composer dump-autoload
// php artisan route:clear

// php artisan key:generate
// php artisan config:cache