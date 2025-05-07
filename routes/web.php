<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\FrontEndController;



use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminHomePageController;
use App\Http\Controllers\Admin\AdminServiceController;


//Frontend Route
Route::get('/',[FrontEndController::class,'index'])->name('frontend');








//Admin Route

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
 
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');


    Route::get('/admin/home-banner', [AdminHomePageController::class, 'banner'])->name('admin_home_banner');
    Route::post('/admin/home-banner-update', [AdminHomePageController::class, 'banner_update'])->name('admin_home_banner_update');

    Route::get('/admin/page/services', [AdminServiceController::class, 'services'])->name('admin_page_services');
    Route::post('/admin/page/services/update', [AdminServiceController::class, 'services_update'])->name('admin_page_services_update');

});
