<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

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

Route::get('/',[PageController::class, 'home'])->name('home');
Route::get('/gallery',[PageController::class, 'gallery'])->name('gallery');
Route::get('/about',[PageController::class, 'about'])->name('about');
Route::get('/contact',[PageController::class, 'contact'])->name('contact');

Route::get('/posts',[PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post}',[PostController::class, 'show'])->name('posts.show');

Route::get('/tours',[TourController::class, 'index'])->name('tours.index');
Route::get('/tours/{tour}',[TourController::class, 'show'])->name('tours.show');

Route::get('/login',[AuthController::class, 'login'])->name('login');

Route::get('language/{locale}',[LanguageController::class, 'change_locale'])->name('locale.change');



