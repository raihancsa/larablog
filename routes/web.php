<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\AboutController;

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
    return view('frontend.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/view/profile', 'viewProfile')->name('view.profile');
    Route::get('/edit/profile', 'edit')->name('edit.profile');
    Route::post('/update/profile', 'update')->name('update.profile');
    Route::get('/change/password', 'changePassword')->name('change.password');
    Route::post('/update/password', 'updatePassword')->name('update.password');
});

Route::controller(SliderController::class)->group(function () {
    Route::get('/view/home', 'index')->name('slider.list');
    Route::get('/edit/content/', 'edit')->name('edit.slider');
    Route::post('/update/slider/', 'updateSlider')->name('update.slider');
});

Route::controller(AboutController::class)->group(function () {
    Route::get('/view/about', 'index')->name('view.about');
    Route::get('/edit/about/', 'edit')->name('edit.about');
    Route::post('/update/about/', 'updateAbout')->name('update.about');
});
