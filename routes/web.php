<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Accounts\AccountsController;
use App\Http\Controllers\Package\PackageController;
use App\Http\Controllers\Activities\ActivityController;

use App\Http\Controllers\DestinationsController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\website\BlogsController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\BookingController;




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
Route::any('/packages-list', [WebsiteController::class,'packages_list']);
Route::get('/package_details/{package_details}', [WebsiteController::class,'package_details']);
Route::get('/custom_package_create', [WebsiteController::class,'custom_package_create']);
Route::post('/custom_package_submit', [WebsiteController::class,'custom_package_submit']);
Route::get('/letter_of_invitation', [WebsiteController::class,'letter_of_invitation']);
Route::post('/visa_support_submit', [WebsiteController::class,'visa_support_submit']);


Route::any('/activities-list', [WebsiteController::class,'activities_list']);
Route::get('/activity_details/{activity_details}', [WebsiteController::class,'activity_details']);

Route::get('/blogs_list', [WebsiteController::class,'blogs_list']);
Route::get('/category-blogs/{id}', [WebsiteController::class,'category_blogs']);
Route::get('/blog-details/{id}', [WebsiteController::class,'blog_details']);


Route::post('/add_to_cart', [BookingController::class,'add_to_cart']);
Route::get('/checkout', [BookingController::class,'checkout']);
Route::post('/confirm_booking', [BookingController::class,'confirm_booking']);
Route::get('/invoice/{id}', [BookingController::class,'invoice']);
Route::get('/contact_us', [WebsiteController::class,'contact_us']);
Route::get('/about_us', [WebsiteController::class,'about_us']);

// Customer Login
Route::get('/customer_login', [WebsiteController::class,'customer_login']);
Route::post('/email_submit', [WebsiteController::class,'email_submit']);
Route::get('/otp_verify', [WebsiteController::class,'otp_verify']);
Route::post('/otp_submit', [WebsiteController::class,'otp_submit']);
Route::get('/customer_dashboard', [WebsiteController::class,'customer_dashboard']);
Route::get('/customer_booking', [WebsiteController::class,'customer_booking']);
Route::get('/customer_payment_request', [WebsiteController::class,'customer_payment_request']);
Route::post('/payment_request_submit', [BookingController::class,'payment_request_submit']);



// Packages Routes


Route::get('/dashboard',[AccountsController::class,'dashboard'])
->middleware('auth:web')->name('dashboard');



Route::get('/dashboard',[AccountsController::class,'dashboard'])
->middleware('auth:web')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    Route::get('/admin_payment_request', [BookingController::class,'admin_payment_request']);
    Route::post('/update_payment_status', [BookingController::class,'update_payment_status']);
   
    
    Route::get('/custom_package_request', [BookingController::class,'custom_package_request']);
    Route::get('/visa_request_list', [BookingController::class,'visa_request_list']);
    
    Route::post('/update_custom_package_status', [BookingController::class,'update_custom_package_status']);
    
    Route::get('/bookings_list', [BookingController::class,'bookings_list']);
    Route::get('/confirmed_bookings_list', [BookingController::class,'Confirmed_bookings_list']);
    Route::post('/update_booking_status', [BookingController::class,'update_booking_status']);
    
    // Destinations Routes
    Route::get('/destinations_list',[DestinationsController::class,'destinations_list']);
    Route::post('/destination_submit',[DestinationsController::class,'destination_submit']);
    Route::get('/fetch_country_destinations/{id}',[DestinationsController::class,'fetch_country_destinations']);

    // Packages Routes
    Route::get('/create_package',[PackageController::class,'create_package']);
    Route::post('/package_submit',[PackageController::class,'package_submit']);
    Route::get('/packages_list',[PackageController::class,'packages_list']);

    // Activities Routes
    Route::get('/create_activities',[ActivityController::class,'create_activities']);
    Route::post('/activities_submit',[ActivityController::class,'activities_submit']);
    Route::get('/activities_list',[ActivityController::class,'activities_list']);
    

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
