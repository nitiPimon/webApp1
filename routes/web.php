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

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::redirect('/', 'user/search');

    // Search.
    Route::get('user/search', [SearchController::class,'index'])->name('search');

    // Dashboard.
    Route::get('user/dashboard', [DashboardController::class,'index'])->name('dashboard');

    // Restaurant.
    Route::get('user/restaurant', [RestaurantController::class,'index'])->name('restaurant');

    //Search a restaurant.
    Route::get('user/searchRes',[SearchController::class,'search'])->name('searchRestaurant');  

});
Route::middleware(['auth:sanctum', 'verified','authadmin'])->get('/admin/dashboard', function () {
    return view('admin/dashboard');
})->name('adminDashboard');

