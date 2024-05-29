<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\SliderController;
use App\Http\Controllers\Dashboard\SliderFooterController;
use App\Http\Controllers\Dashboard\WhoWeAreSideController;
use App\Http\Controllers\Dashboard\WhoWeAreDetailController;
use App\Http\Controllers\Dashboard\WhoWeAreFaqController;
use App\Http\Controllers\Dashboard\ServiceDetailController;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['register' => false]);
Route::get('/home', [HomeController::class, 'index'])->name('home');

/****************************** Start Admin Routes ******************************/
Route::Group(['prefix' => 'admin', 'middleware' => 'auth'], function () { 

    //roles
    Route::resource('role', RoleController::class);
    Route::post('roleDelete', [RoleController::class, 'delete'])->name('role.delete');


    //user
    Route::get('user', [UserController::class, 'index'])->name('user.index');
    Route::post('user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('user/update', [UserController::class, 'update'])->name('user.update');
    Route::delete('user/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::post('userDeleteSelected', [UserController::class, 'deleteSelected'])->name('user.deleteSelected');
    Route::get('userShowNotification/{id}', [UserController::class, 'showNotification'])->name('user.showNotification');   
    Route::get('userChangeStatus/{id}', [UserController::class, 'changeStatus'])->name('user.changeStatus');


    //slider
    Route::get('slider', [SliderController::class, 'index'])->name('slider.index');
    Route::post('slider/store', [SliderController::class, 'store'])->name('slider.store');
    Route::get('slider/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
    Route::post('slider/update', [SliderController::class, 'update'])->name('slider.update');
    Route::delete('slider/destroy', [SliderController::class, 'destroy'])->name('slider.destroy');
    Route::delete('sliderDeleteSelected', [SliderController::class, 'deleteSelected'])->name('slider.deleteSelected');
    Route::get('sliderShowNotification/{id}/{notification_id}', [SliderController::class, 'showNotification'])->name('slider.showNotification');



    //slider-footer
    Route::get('slider-footer', [SliderFooterController::class, 'index'])->name('slider-footer.index');
    Route::post('slider-footer/store', [SliderFooterController::class, 'store'])->name('slider-footer.store');
    Route::get('slider-footer/edit/{id}', [SliderFooterController::class, 'edit'])->name('slider-footer.edit');
    Route::post('slider-footer/update', [SliderFooterController::class, 'update'])->name('slider-footer.update');
    Route::delete('slider-footer/destroy', [SliderFooterController::class, 'destroy'])->name('slider-footer.destroy');
    Route::delete('slider-footerDeleteSelected', [SliderFooterController::class, 'deleteSelected'])->name('slider-footer.deleteSelected');
    Route::get('slider-footerShowNotification/{id}/{notification_id}', [SliderFooterController::class, 'showNotification'])->name('slider-footer.showNotification');



    //who-we-are-side
    Route::get('who-we-are-side', [WhoWeAreSideController::class, 'index'])->name('who-we-are-side.index');
    Route::post('who-we-are-side/store', [WhoWeAreSideController::class, 'store'])->name('who-we-are-side.store');
    Route::get('who-we-are-side/edit/{id}', [WhoWeAreSideController::class, 'edit'])->name('who-we-are-side.edit');
    Route::post('who-we-are-side/update', [WhoWeAreSideController::class, 'update'])->name('who-we-are-side.update');
    Route::delete('who-we-are-side/destroy', [WhoWeAreSideController::class, 'destroy'])->name('who-we-are-side.destroy');
    Route::delete('who-we-are-sideDeleteSelected', [WhoWeAreSideController::class, 'deleteSelected'])->name('who-we-are-side.deleteSelected');
    Route::get('who-we-are-sideShowNotification/{id}/{notification_id}', [WhoWeAreSideController::class, 'showNotification'])->name('who-we-are-side.showNotification');



    //who-we-are-detail
    Route::get('who-we-are-detail', [WhoWeAreDetailController::class, 'index'])->name('who-we-are-detail.index');
    Route::post('who-we-are-detail/store', [WhoWeAreDetailController::class, 'store'])->name('who-we-are-detail.store');
    Route::get('who-we-are-detail/edit/{id}', [WhoWeAreDetailController::class, 'edit'])->name('who-we-are-detail.edit');
    Route::post('who-we-are-detail/update', [WhoWeAreDetailController::class, 'update'])->name('who-we-are-detail.update');
    Route::delete('who-we-are-detail/destroy', [WhoWeAreDetailController::class, 'destroy'])->name('who-we-are-detail.destroy');
    Route::delete('who-we-are-detailDeleteSelected', [WhoWeAreDetailController::class, 'deleteSelected'])->name('who-we-are-detail.deleteSelected');
    Route::get('who-we-are-detailShowNotification/{id}/{notification_id}', [WhoWeAreDetailController::class, 'showNotification'])->name('who-we-are-detail.showNotification');



    //who-we-are-faq
    Route::get('who-we-are-faq', [WhoWeAreFaqController::class, 'index'])->name('who-we-are-faq.index');
    Route::post('who-we-are-faq/store', [WhoWeAreFaqController::class, 'store'])->name('who-we-are-faq.store');
    Route::get('who-we-are-faq/edit/{id}', [WhoWeAreFaqController::class, 'edit'])->name('who-we-are-faq.edit');
    Route::post('who-we-are-faq/update', [WhoWeAreFaqController::class, 'update'])->name('who-we-are-faq.update');
    Route::delete('who-we-are-faq/destroy', [WhoWeAreFaqController::class, 'destroy'])->name('who-we-are-faq.destroy');
    Route::delete('who-we-are-faqDeleteSelected', [WhoWeAreFaqController::class, 'deleteSelected'])->name('who-we-are-faq.deleteSelected');
    Route::get('who-we-are-faqShowNotification/{id}/{notification_id}', [WhoWeAreFaqController::class, 'showNotification'])->name('who-we-are-faq.showNotification');



    //service-detail
    Route::get('service-detail', [ServiceDetailController::class, 'index'])->name('service-detail.index');
    Route::post('service-detail/store', [ServiceDetailController::class, 'store'])->name('service-detail.store');
    Route::get('service-detail/edit/{id}', [ServiceDetailController::class, 'edit'])->name('service-detail.edit');
    Route::post('service-detail/update', [ServiceDetailController::class, 'update'])->name('service-detail.update');
    Route::delete('service-detail/destroy', [ServiceDetailController::class, 'destroy'])->name('service-detail.destroy');
    Route::delete('service-detailDeleteSelected', [ServiceDetailController::class, 'deleteSelected'])->name('service-detail.deleteSelected');
    Route::get('service-detailShowNotification/{id}/{notification_id}', [ServiceDetailController::class, 'showNotification'])->name('service-detail.showNotification');

});
/****************************** End Admin Routes ******************************/

//general routes
Route::get('show_file/{folder_name}/{photo_name}', [GeneralController::class, 'show_file'])->name('show_file');
Route::get('download_file/{folder_name}/{photo_name}', [GeneralController::class, 'download_file'])->name('download_file');
Route::get('allNotifications', [GeneralController::class, 'allNotifications'])->name('allNotifications');
Route::get('markAllAsRead', [GeneralController::class, 'markAllAsRead'])->name('markAllAsRead');