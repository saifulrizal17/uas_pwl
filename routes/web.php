<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaundryController;
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



// Login Admin
Route::prefix('/')->middleware('auth','isAdmin')->group(function(){
    Route::resource('/admin', LaundryController::class);
    // Route::get('/admin', [LaundryController::class, 'index']);
    Route::get('/edit/{id}', [LaundryController::class, 'edit'])->name('edit');
    // Route::get('/update/{id}', [LaundryController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [LaundryController::class, 'destroy'])->name('destroy');

  
});


