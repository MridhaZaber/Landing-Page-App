<?php

use App\Http\Controllers\Admin\ProtfolioController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\FrontEndController;



use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminHomePageController;

use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\AdminServiceCategoryController;
use App\Http\Controllers\Admin\AdminInfoController;
use App\Http\Controllers\Admin\WhyChooseSectionUpdateController;
use App\Http\Controllers\Admin\StatController;
use App\Http\Controllers\Admin\InfoTwoController;




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



    Route::get('/admin/whychoose', [WhyChooseSectionUpdateController::class, 'whychoose'])->name('admin_whychoose');
    Route::post('/admin/whychoose-update', [WhyChooseSectionUpdateController::class, 'whychoose_update'])->name('admin_whychooseupdate_update');



    Route::get('/admin/stat', [StatController::class, 'stat'])->name('admin_stat');
    Route::post('/admin/stat-update', [StatController::class, 'stat_update'])->name('admin_stat_update');


    Route::get('/admin/info-two', [InfoTwoController::class, 'infotwo'])->name('admin_info_two');
    Route::post('/admin/info-two-update', [InfoTwoController::class, 'infotwo_update'])->name('admin_home_info_two_update');



    Route::get('/admin/home-portfolio', [AdminHomePageController::class, 'portfolio'])->name('admin_home_portfolio');
    Route::post('/admin/home-portfolio-update', [AdminHomePageController::class, 'portfolio_update'])->name('admin_home_portfolio_update');

    Route::get('/admin/protfolio/show', [ProtfolioController::class, 'index'])->name('admin_protfolio_show');
    Route::get('/admin/protfolio/add', [ProtfolioController::class, 'add'])->name('admin_protfolio_add');
    Route::post('/admin/protfolio/submit', [ProtfolioController::class, 'store'])->name('admin_protfolio_submit');
    Route::get('/admin/protfolio/edit/{id}', [ProtfolioController::class, 'edit'])->name('admin_protfolio_edit');
    Route::post('/admin/protfolio/update/{id}', [ProtfolioController::class, 'update'])->name('admin_protfolio_update');
    Route::get('/admin/protfolio/delete/{id}', [ProtfolioController::class, 'delete'])->name('admin_protfolio_delete');



    


});
