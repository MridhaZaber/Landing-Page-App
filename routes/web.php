<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\FrontEndController;



use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminHomePageController;
use App\Http\Controllers\AdminInfoController;


//Frontend Route
Route::get('/',[FrontEndController::class,'index'])->name('frontend');








//Admin Route

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
 
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');


    Route::get('/admin/home-banner', [AdminHomePageController::class, 'banner'])->name('admin_home_banner');
    Route::post('/admin/home-banner-update', [AdminHomePageController::class, 'banner_update'])->name('admin_home_banner_update');


    Route::get('/admin/home-info', [AdminHomePageController::class, 'info'])->name('admin_home_info');
    Route::post('/admin/home-info-update', [AdminHomePageController::class, 'info_update'])->name('admin_home_info_update');

    Route::get('/admin/info/show', [AdminInfoController::class, 'index'])->name('admin_info_show');
    Route::get('/admin/info/add', [AdminInfoController::class, 'add'])->name('admin_info_add');
    Route::post('/admin/info/submit', [AdminInfoController::class, 'store'])->name('admin_info_submit');
    Route::get('/admin/info/edit/{id}', [AdminInfoController::class, 'edit'])->name('admin_info_edit');
    Route::post('/admin/info/update/{id}', [AdminInfoController::class, 'update'])->name('admin_info_update');
    Route::get('/admin/info/delete/{id}', [AdminInfoController::class, 'delete'])->name('admin_info_delete');
});
