<?php

use App\Http\Controllers\AppointementController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\AdminController;

Route::get('/onze-auto', [AutoController::class, 'cars']);
Route::get('/', function () {
    return view('home');
});
Route::get('/car/{id}', [AutoController::class, 'show']);



Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name("admin.dashboard");
Route::get('/admin/create-cars', [DashboardController::class, 'create']);
Route::get('/admin/edit-cars/{id}', [DashboardController::class, 'edit']);
Route::post('/admin/edit-cars/{id}', [DashboardController::class, 'update']);
Route::post('/admin/create-cars', [DashboardController::class, 'store']);
Route::get('/admin/cars', [DashboardController::class, 'showCars'])->name("admin.cars");

Route::delete('/admin/car/{id}', [DashboardController::class, 'destroy'])->name("admin.car.destoy");


Route::get('/contact', [AppointementController::class, 'index']);
Route::post('/contact-send', [AppointementController::class, 'send'])->name("contact-send");



Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login']);
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');