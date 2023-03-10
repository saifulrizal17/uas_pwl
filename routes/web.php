<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaundryController;
use App\Http\Controllers\UserController;
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
// Sebelum Login
Route::get('/', function () {
    return view('pages.home');
});

// Login User 
Auth::routes();
Route::get('user', [HomeController::class, 'index'])->name('user');
Route::post('user', [UserController::class, 'store'])->middleware('auth')->name('store');
Route::get('user/list', [UserController::class, 'index'])->middleware('auth')->name('index');

// Login Admin
Route::resource('/admin', LaundryController::class)->middleware(['auth','isAdmin']);
// Route::prefix('/')->middleware('auth','isAdmin')->group(function(){
//     Route::resource('/admin', LaundryController::class);
//     // Route::get('/admin', [LaundryController::class, 'index']);
//     Route::get('/edit/{id}', [LaundryController::class, 'edit'])->name('edit');
//     // Route::get('/update/{id}', [LaundryController::class, 'update'])->name('update');
//     Route::get('/delete/{id}', [LaundryController::class, 'destroy'])->name('destroy');
// });



