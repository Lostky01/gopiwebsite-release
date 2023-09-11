<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\AdminController;
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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/whatwedo', function () {
    return view('whatwedo');
})->name('whatwedo');

Route::get('/home', function () {
    return view('home');
})->name('home');


Route::get('/contact', [EmailController::class, 'index'])->name('contact');
Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/download-pdf', [AdminController::class, 'downloadPdf'])->name('download-pdf');
Route::get('/export-excel', [AdminController::class, 'exportToExcel'])->name('export-excel');
