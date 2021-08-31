<?php

use App\Http\Controllers\CarDetailing;
use App\Http\Controllers\CarPaintProtection;
use App\Http\Controllers\CarWindowTinting;
use App\Http\Controllers\CarWrapping;
use App\Http\Controllers\CarWrappingDesign;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Detail;
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

Route::get('/kontakt', [Contact::class, 'view'])->name('contact');

Route::get('/car-detailing', [CarDetailing::class, 'view'])->name('car-detailing');

Route::get('/lackschutzfolie', [CarPaintProtection::class, 'view'])->name('car-paint-protection');

Route::get('/scheiben-tönen', [CarWindowTinting::class, 'view'])->name('car-window-tinting');

Route::get('/auto-folieren', [CarWrapping::class, 'view'])->name('car-wrapping');

Route::get('/design-deine-folie', [CarWrappingDesign::class, 'view'])->name('car-wrapping-design');

Route::get('/detail/{slug}', [Detail::class, 'view'])->name('detail');

Route::post('/send-mail', [Contact::class, 'sendEmail'])->name('send-email');

Route::get('/refresh-captcha', [Contact::class, 'refreshCaptcha']);
