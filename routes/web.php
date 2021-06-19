<?php

use App\Http\Controllers\CarDetailing;
use App\Http\Controllers\CarPaintProtection;
use App\Http\Controllers\CarWindowTinting;
use App\Http\Controllers\CarWrapping;
use App\Http\Controllers\CarWrappingDesign;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Gallery;
use App\Http\Controllers\Home;
use App\Http\Controllers\Services;
use Illuminate\Support\Facades\Route;

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


    Route::get('/', [Home::class, 'view'])->name('home');

    Route::get('/services', [Services::class, 'view'])->name('services');

    Route::get('/gallery', [Gallery::class, 'view'])->name('gallery');

    Route::get('/contact', [Contact::class, 'view'])->name('contact');

    Route::get('/car-detailing', [CarDetailing::class, 'view'])->name('car-detailing');

    Route::get('/car-paint-protection', [CarPaintProtection::class, 'view'])->name('car-paint-protection');

    Route::get('/car-window-tinting', [CarWindowTinting::class, 'view'])->name('car-window-tinting');

    Route::get('/car-wrapping', [CarWrapping::class, 'view'])->name('car-wrapping');

    Route::get('/car-wrapping-design', [CarWrappingDesign::class, 'view'])->name('car-wrapping-design');

    Route::post('/send-mail', [Contact::class, 'sendEmail'])->name('send-email');

