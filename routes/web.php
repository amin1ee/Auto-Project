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



Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/create-cars', [DashboardController::class, 'create']);
    Route::post('/create-cars', [DashboardController::class, 'store']);
    Route::get('/edit-cars/{id}', [DashboardController::class, 'edit']);
    Route::post('/edit-cars/{id}', [DashboardController::class, 'update']);
    Route::get('/cars', [DashboardController::class, 'showCars'])->name('admin.cars');
    Route::delete('/car/{id}', [DashboardController::class, 'destroy'])->name('admin.car.destroy');
    Route::get('/appointmenets', [AppointementController::class, 'appointment']);
    Route::delete('/appointmenets/{id}', [AppointementController::class, 'destroy'])->name("appointments.destroy");
});


Route::get('/contact', [AppointementController::class, 'index']);
Route::post('/contact-send', [AppointementController::class, 'send'])->name("contact-send");



Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('login');
Route::post('admin/login', [AdminController::class, 'login']);
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
