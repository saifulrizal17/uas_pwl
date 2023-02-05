<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('pages.home');
});

Auth::routes();

Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    Route::get('/',function(){
        return "A";
    });
});
