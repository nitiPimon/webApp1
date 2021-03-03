<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RestaurantController;
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

// Route::get('/', function () {
//     return view('auth/login');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
// Route::middleware(['auth:sanctum', 'verified'])->get('/search', function () {
//     return view('search');
// })->name('search');
// Route::middleware(['auth:sanctum', 'verified'])->get('/restaurant', function () {
//     return view('restaurant');
// })->name('restaurant');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::redirect('/', 'search');

    // Search
    Route::get('/search', [SearchController::class,'index'])->name('search');

    // Dashboard
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

    // Restaurant
    Route::get('/restaurant', [RestaurantController::class,'index'])->name('restaurant');

    //Search a restaurant.
    Route::get('/searchRes',[SearchController::class,'search'])->name('searchRestaurant');  
});
