<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HowToOrderController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\PrivacyPolicyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::get('/service/pricing', [PriceController::class, 'index'])->name('pricing.index');

Route::get('/service/order-guide', [HowToOrderController::class, 'index'])->name('order-guide.index');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio/{slug}', [PortfolioController::class, 'show'])->name('portfolio.show');

Route::get('/article', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/{slug}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index'])->name('provicy-policy.index');
