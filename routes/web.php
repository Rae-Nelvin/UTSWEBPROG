<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingPageController::class, 'index'])->name('index');
Route::get('/publisher', [LandingPageController::class, 'publisher'])->name('publisher');
Route::get('/contact', [LandingPageController::class, 'contact'])->name('contact');
Route::get('/book-detail/{id}', [LandingPageController::class, 'bookDetail'])->name('book-detail');
Route::get('/book-category/{category}', [LandingPageController::class, 'bookCategory'])->name('book-category');
Route::get('/publisher-detail/{id}', [LandingPageController::class, 'publisherDetail'])->name('publisher-detail');

require __DIR__ . '/auth.php';
