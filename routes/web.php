<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminManageUser;
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

Route::get('/welcome', function () {
    return view('welcome');
});



Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::redirect('/', 'user/search');

    // Search.
    Route::get('user/search', [SearchController::class,'index'])->name('search');

    // Dashboard.
    Route::get('user/dashboard', [DashboardController::class,'index'])->name('dashboard');

    // Restaurant.
    Route::get('user/restaurant', [RestaurantController::class,'index'])->name('restaurant');

    // Restaurant.
    Route::get('user/restaurant/{id}', [RestaurantController::class,'show']);

    //Search a restaurant.
    Route::get('user/searchRes',[SearchController::class,'search'])->name('searchRestaurant');  
    

});
/*
Route::middleware(['auth:sanctum', 'verified','authadmin'])->get('/admin/dashboard', function () {
    return view('admin/dashboard');
})->name('adminDashboard');

*/

//Route::resource('admin/dashboard', AdminDashboardController::class);

Route::group(['middleware' => ['auth:sanctum', 'verified', 'authadmin']], function () {
    
    Route::redirect('/', 'admin/dashboard');
    // Dashboard.
    Route::get('admin/dashboard', [AdminDashboardController::class,'index'])->name('adminDashboard');
    
    // Create 
    Route::get('admin/create', [AdminDashboardController::class,'create'])->name('adminCreate');

    // Update
    Route::get('admin/edit', [AdminDashboardController::class, 'edit'])->name('adminEdit');

    //Delete
    Route::get('delete/{id}',[AdminDashboardController::class, 'destroy'])->name('adminDelete');
    
    // Store
    Route::resource('store', AdminDashboardController::class);


    Route::get('admin/manage', [AdminManageUser::class,'index'])->name('adminManage');

    Route::get('deleteManage/{id}',[AdminManageUser::class, 'destroy'])->name('deleteUser');

    // store update
    //Route::resource('adminUpdate', AdminDashboardController::class);

});