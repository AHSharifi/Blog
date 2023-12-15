<?php

use App\Http\Controllers\HomeController;
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

Route::get('/' , [HomeController::class , 'Home'])->name('home');
Route::get('/create' , [HomeController::class , 'Create'])->middleware(['auth', 'verified'])->name('create');
Route::post('/store' , [HomeController::class , 'Store'])->name('store');
Route::get('/list' , [HomeController::class , 'List'])->middleware(['auth', 'verified'])->name('list');
Route::get('/edit/{news}' , [HomeController::class , 'Edit'])->middleware(['auth', 'verified'])->name('edit');
Route::put('/update/{news}' , [HomeController::class , 'Update'])->middleware('auth' , 'verified')->name('update');
Route::delete('/delete/{news}' , [HomeController::class , 'Delete'])->middleware('auth' , 'verified')->name('delete');
Route::get('/show{news}' , [HomeController::class , 'Show'])->name('show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
