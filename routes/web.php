<?php

use App\Http\Controllers\ProfileController;
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
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('menu', [MenuController::class, 'index'])->name('menu.index');
Route::get('cart', [MenuController::class, 'cart'])->name('menu.cart');

Route::view('/menu', 'pages/menu')->name('menu.view');
Route::view('/cart', 'pages/cart')->name('menu.cart');
Route::view('/about', 'pages/about')->name('about.view');
Route::view('/location', 'pages/location')->name('location.view');

require __DIR__.'/auth.php';
