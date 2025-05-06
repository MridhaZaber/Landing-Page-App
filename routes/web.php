<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\FrontEndController;



use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminHomePageController;


//Frontend Route
Route::get('/',[FrontEndController::class,'index'])->name('frontend');








//Admin Route

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
 
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');


    Route::get('/admin/home-banner', [AdminHomePageController::class, 'banner'])->name('admin_home_banner');
    Route::post('/admin/home-banner-update', [AdminHomePageController::class, 'banner_update'])->name('admin_home_banner_update');
});
