<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/cv', [FrontendController::class, 'cv'])->name('cv');
Route::get('/projects', [FrontendController::class, 'projects'])->name('projects');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
