<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;


Route::get('/', [SiteController::class, 'homePage'])-> name('home');

Route::get('/about', [SiteController::class, 'aboutPage'])-> name('about');

Route::get('/service', [SiteController::class, 'servicePage'])-> name('service');

Route::get('portfolio', [SiteController::class, 'portfolioPage'])-> name('portfolio');

Route::get('contact', [SiteController::class, 'contactPage'])-> name('contact');