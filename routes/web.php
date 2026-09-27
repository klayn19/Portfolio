<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| The main route '/' loads your portfolio layout via PortfolioController.
|
*/

// Portfolio Homepage
Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.home');

// Contact Form Handler
Route::post('/contact', [PortfolioController::class, 'contact'])->name('portfolio.contact');
