<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

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

Route::get('/', [WebsiteController::class, 'homePage'])->name('home');
Route::get('/about', [WebsiteController::class, 'aboutPage'])->name('about');
Route::get('/where-to-apply', [WebsiteController::class, 'whereToApplyPage'])->name('whereToApply');
Route::get('/locations', [WebsiteController::class, 'locationsPage'])->name('locations');
Route::get('/products', [WebsiteController::class, 'productsPage'])->name('products');
Route::get('/products/weather-silicone-sealant', [WebsiteController::class, 'weatherSiliconeSealantPage'])->name('weather');
Route::get('/products/structural-silicone-sealant', [WebsiteController::class, 'structuralSiliconeSealantPage'])->name('structural');
Route::get('/products/neutral-silicone-sealant', [WebsiteController::class, 'neutralSiliconeSealantPage'])->name('neutral');

Route::get('/certifications', [WebsiteController::class, 'certificationsPage'])->name('certifications');
Route::post('/verify-password', [WebsiteController::class, 'verifyPassword'])->name('verify');

Route::get('/contact-us', [WebsiteController::class, 'contactPage'])->name('contact');
Route::post('/contact-us', [WebsiteController::class, 'postContactForm'])->name('contact.post');