<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Routes PublicController
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route ::post('/contattaci/submit', [PublicController::class, 'contact_us_submit'])->name('contact_us_submit');

// Routes \App\Http\Controllers\ServiceController
Route::get('/services', [ServiceController::class, 'service_index'])->name('services');
Route::get('/services/dettaglio/{id}', [ServiceController::class, 'service_show'])->name('services-dettaglio');