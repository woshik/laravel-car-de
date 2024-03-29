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
use App\Http\Controllers\TeslaModelY;
use App\Http\Controllers\Landing;
use App\Http\Controllers\PpfLanding;
use App\Http\Controllers\ThankYou;
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

Route::get('/thank-you', [ThankYou::class, 'view'])->name('thankYou');

// landing page
Route::get('/fb/ppf', [PpfLanding::class, 'view'])->name('fb_landing_paint_protection');

// Route::get('/auto-detailing', [CarDetailing::class, 'view'])->name('car-detailing');

Route::get('/steinschlagschutzfolie', [CarPaintProtection::class, 'view'])->name('car-paint-protection');

Route::get('/lackschutzfolie', [CarPaintProtection::class, 'view2'])->name('car-paint-protection-new');

Route::get('/scheiben-tönen', [CarWindowTinting::class, 'view'])->name('car-window-tinting');

Route::get('/autofolierung', [CarWrapping::class, 'view'])->name('car-wrapping');

Route::get('/auto-folien-design', [CarWrappingDesign::class, 'view'])->name('car-wrapping-design');

Route::get('/detail/{slug}', [Detail::class, 'view'])->name('detail');

Route::post('/send-mail', [Contact::class, 'sendEmail'])->name('send-email');

Route::get('/tesla-model-y', [TeslaModelY::class, 'view'])->name('tesla-model-y');

Route::get('/all/{slug}', [Landing::class, 'view'])->name('landing');

// redirect routes

Route::redirect('/design-deine-folie', '/auto-folien-design', 301);

Route::redirect('/lackschutzfolie-steinschlagschutz', '/steinschlagschutzfolie', 301);

Route::redirect('/porschefolieren', '/', 301);

Route::redirect('/lackschutzfolien-i-steinschlagschutz', '/steinschlagschutzfolie', 301);

Route::redirect('/contact', '/kontakt', 301);

Route::redirect('/auto-detailing', '/', 301);