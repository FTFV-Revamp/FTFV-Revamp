<?php

use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\Auth\LoginController;

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


Auth::routes(['verify' => true]);

// Define Custom Verification Routes
Route::controller(VerificationController::class)->group(function() {
    Route::get('/email/verify', 'notice')->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', 'verify')->name('verification.verify');
    Route::post('/email/resend', 'resend')->name('verification.resend');
});
Route::get('/home', [HomeController::class, 'index'])
->name('home')
->middleware('verified');

//bookmark
Route::get('/favourite', [FavouriteController::class, 'favourite'])->name('favourite');
Route::delete('/favourite/{id}', [FavouriteController::class, 'destroy'])->name('favourite.destroy');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
