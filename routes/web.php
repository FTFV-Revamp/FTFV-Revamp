<?php

use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VillageController;
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



// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes(['verify' => true]);

// Define Custom Verification Routes
Route::controller(VerificationController::class)->group(function() {
    Route::get('/email/verify', 'notice')->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', 'verify')->name('verification.verify');
    Route::post('/email/resend', 'resend')->name('verification.resend');
});
Route::get('/', [HomeController::class, 'index'])
->name('home');
// ->middleware('verified');
Route::get('/locations', [HomeController::class, 'loadMap'])->name('locations');
//bookmark
Route::post('/bookmarks', [FavouriteController::class, 'store'])->name('store');
Route::get('/favourite', [FavouriteController::class, 'favourite'])->name('favourite');
Route::delete('/favourite/{id}', [FavouriteController::class, 'destroy'])->name('favourite.destroy');
Route::post('/favourite/store', [FavouriteController::class, 'store'])->name('favourite.store');


Route::get('villages/{province_id}', [VillageController::class, 'index'])->name('villages.index');
Route::get('villages/{province_id}/oldvillages/{id}', [VillageController::class, 'detail'])->name('villages.detail');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



Route::get('/towns/{province_id}', fn() => 1)->name('towns.index');
