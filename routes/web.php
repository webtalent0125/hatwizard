<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [\App\Http\Controllers\FrontController::class, 'index'])->name('home');
Route::get('/order', [\App\Http\Controllers\FrontController::class, 'order'])->name('order');
Route::get('/order1', [\App\Http\Controllers\FrontController::class, 'order1'])->name('order');
Route::get('/order2', [\App\Http\Controllers\FrontController::class, 'order2'])->name('order');
Route::get('/order/status', [\App\Http\Controllers\FrontController::class, 'orderStatus'])->name('order.status');
Route::get('/about', [\App\Http\Controllers\FrontController::class, 'about'])->name('about');
Route::get('/faq', [\App\Http\Controllers\FrontController::class, 'faq'])->name('faq');
Route::get('/contact', [\App\Http\Controllers\FrontController::class, 'contact'])->name('contact');
Route::get('/returns', [\App\Http\Controllers\FrontController::class, 'returns'])->name('returns');
Route::get('/terms', [\App\Http\Controllers\FrontController::class, 'terms'])->name('terms');
Route::get('/policy', [\App\Http\Controllers\FrontController::class, 'policy'])->name('policy');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
