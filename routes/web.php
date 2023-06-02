<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Accounts\AccountsController;
use App\Http\Controllers\Package\PackageController;


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


// Packages Routes


Route::get('/dashboard',[AccountsController::class,'dashboard'])
->middleware('auth:web')->name('dashboard');



Route::get('/dashboard',[AccountsController::class,'dashboard'])
->middleware('auth:web')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/destinations_list',[PackageController::class,'create_package']);

    
});

require __DIR__.'/auth.php';
