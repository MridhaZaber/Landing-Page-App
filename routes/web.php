<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\FrontEndController;



use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminHomePageController;

use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\AdminServiceCategoryController;
use App\Http\Controllers\AdminInfoController;



//Frontend Route
Route::get('/',[FrontEndController::class,'index'])->name('frontend');








//Admin Route

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
 
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');


    Route::get('/admin/home-banner', [AdminHomePageController::class, 'banner'])->name('admin_home_banner');
    Route::post('/admin/home-banner-update', [AdminHomePageController::class, 'banner_update'])->name('admin_home_banner_update');

    Route::get('/admin/page/services', [AdminServiceController::class, 'services'])->name('admin_page_services');
    Route::post('/admin/page/services/update', [AdminServiceController::class, 'services_update'])->name('admin_page_services_update');

    Route::get('/admin/service-category/show', [AdminServiceCategoryController::class, 'index'])->name('admin.service_category_show');
    Route::get('/admin/service-category/add', [AdminServiceCategoryController::class, 'add'])->name('admin.service_category_add');
    Route::post('/admin/service-category/submit', [AdminServiceCategoryController::class, 'store'])->name('admin_service_category_submit');
    Route::get('/admin/service-category/edit/{id}', [AdminServiceCategoryController::class, 'edit'])->name('admin_service_category_edit');
    Route::post('/admin/service-category/update/{id}', [AdminServiceCategoryController::class, 'update'])->name('admin_service_category_update');
    Route::get('/admin/service-category/delete/{id}', [AdminServiceCategoryController::class, 'delete'])->name('admin_service_category_delete');


    Route::get('/admin/home-info', [AdminHomePageController::class, 'info'])->name('admin_home_info');
    Route::post('/admin/home-info-update', [AdminHomePageController::class, 'info_update'])->name('admin_home_info_update');

    Route::get('/admin/info/show', [AdminInfoController::class, 'index'])->name('admin_info_show');
    Route::get('/admin/info/add', [AdminInfoController::class, 'add'])->name('admin_info_add');
    Route::post('/admin/info/submit', [AdminInfoController::class, 'store'])->name('admin_info_submit');
    Route::get('/admin/info/edit/{id}', [AdminInfoController::class, 'edit'])->name('admin_info_edit');
    Route::post('/admin/info/update/{id}', [AdminInfoController::class, 'update'])->name('admin_info_update');
    Route::get('/admin/info/delete/{id}', [AdminInfoController::class, 'delete'])->name('admin_info_delete');

});
