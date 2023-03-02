<?php

use App\Http\Controllers\CategoyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\ImageUploadController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/news/{post:postSlug}', [HomeController::class, 'post'])->name('single');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('/category', CategoyController::class)->except(['create', 'show']);
Route::resource('/setting', SettingController::class)->only(['index', 'update']);
Route::resource('/organizer', OrganizerController::class);
Route::resource('/post', PostController::class);
Route::resource('/tour', TourController::class);

Route::post('image-upload', [ImageUploadController::class, 'storeImage'])->name('image.upload');
