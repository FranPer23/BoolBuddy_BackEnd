<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\VoteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('profiles', ProfileController::class);
    Route::get('reviews', [ReviewController::class, 'index'])->name('reviews.index');
    Route::get('messages', [MessageController::class, 'index'])->name('messages.index');
    Route::get('votes', [VoteController::class, 'index'])->name('votes.index');


    // Route::get('profile', function () {
    //     // Only authenticated users may enter...
    // })->middleware('auth');
});



require __DIR__ . '/auth.php';
