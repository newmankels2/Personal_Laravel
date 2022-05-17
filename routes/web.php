<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\CustomerOrderController;
use App\Http\Controllers\Admin\FoodDeliveryController;

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

Auth::routes();

// Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return view('welcome');
});

//route::get('/login',[login::class,'function']);
// return view('login');

Route::middleware('auth')->group(function () {
    route::get('/home', function () {
        return view("home");
    });

    route::get('/about', function () {
        return view("about");
    });

    route::get('/feature', function () {
        return view("feature");
    });

    route::get('/booking', function () {
        return view("booking");
        redirect('admin /');
    });

    route::get('/contact', function () {
        return view("contact");
    });

    route::get('/menu', function () {
        return view("menu");
    });

    route::get('/single', function () {
        return view("single");
    });

    route::get('/chef', function () {
        return view("chef");
    });

    Route::post('/booking', [BookingController::class, 'saveBookings']);
});

// Route::get('/header',[header::class, 'function']);
//     return view('header');


Route::middleware(['adminProtectedPage', 'auth'])->prefix('admin-dashboard')->group(function () {
    Route::resource('/', AdminController::class);

    // Customer Order
    Route::resource('customer-order', CustomerOrderController::class);

    // Food Delivery
    Route::resource('food-delivery', FoodDeliveryController::class);
});
