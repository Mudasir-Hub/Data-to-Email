<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImportCarController;
use App\Http\Controllers\ContactUsController;

Route::get('/' , [HomeController::class, 'index'])->name('index');
Route::get('/about' , [HomeController::class, 'about_page'])->name('aboutus');
Route::get('/import_car' , [HomeController::class, 'import_form_page'])->name('import_car_form');
Route::post('/import_car_info', [ImportCarController::class, 'getData'])->name('getData');
Route::get('/contactus' , [HomeController::class, 'contact_page'])->name('contactus');
// Route::post('/contactUs', [ContactUsController::class, 'getData']);
Route::post('/contactUs', [ContactUsController::class, 'getData'])->name('getData');
Route::get('/feedback' , [HomeController::class, 'feedback_page'])->name('feedback');
Route::get('/tax_result/{id}' , [HomeController::class, 'cars_page'])->name('tax_result');
Route::get('/car_result', [HomeController::class, 'result'])->name('result');
Route::get('/pagenotfound' , [HomeController::class, 'page_404'])->name('pagenotfound');
Route::get('/service-unavailable' , [HomeController::class, 'service_503'])->name('serviceunavailable');
Route::get('/getVehicles/{id}', [HomeController::class , 'getVehicles'])->name('getVehicles');