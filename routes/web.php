<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Accounts\AccountsController;
use App\Http\Controllers\Package\PackageController;
use App\Http\Controllers\DestinationsController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\website\BlogController;
use App\Http\Controllers\WebsiteController;




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

Route::get('/', [WebsiteController::class,'index']);


// Packages Routes


Route::get('/dashboard',[AccountsController::class,'dashboard'])
->middleware('auth:web')->name('dashboard');



Route::get('/dashboard',[AccountsController::class,'dashboard'])
->middleware('auth:web')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Destinations Routes
    Route::get('/destinations_list',[DestinationsController::class,'destinations_list']);
    Route::post('/destination_submit',[DestinationsController::class,'destination_submit']);
    Route::get('/fetch_country_destinations/{id}',[DestinationsController::class,'fetch_country_destinations']);

    // Packages Routes
    Route::get('/create_package',[PackageController::class,'create_package']);
    Route::post('/package_submit',[PackageController::class,'package_submit']);
    Route::get('/packages_list',[PackageController::class,'packages_list']);

     // Destinations Routes
    Route::get('/reviews_list',[ReviewsController::class,'reviews_list']);
    Route::post('/reviews_submit',[ReviewsController::class,'reviews_submit']);

    // Website Blogs

    Route::get('/blogs-list', [BlogsController::class,'index']);
    Route::get('/blogs-add', [BlogsController::class,'create']);
    Route::get('/blogs-update/{id}', [BlogsController::class,'edit']);
    Route::post('/blogs-update/{id}', [BlogsController::class,'update']);
    Route::post('/blogs-submit', [BlogsController::class,'store']);
    Route::get('/blogs-categories', [BlogsController::class,'blogs_categories']);
    Route::get('/category-data/{id}', [BlogsController::class,'getCategories']);
    Route::post('/blog-cat-submit', [BlogsController::class,'storeCategory']);
    Route::post('/blog-cat-update', [BlogsController::class,'updateCategory']);
    Route::post('/update_blog_status', [BlogsController::class,'update_blog_status']);
    
    
});

require __DIR__.'/auth.php';
