<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\UsersController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/webprice', function () {
    return view('parts/softwareprice');
});

Route::get('/blog', [HomeController::class, 'blog']);
// Route::get('/detail/{id}', [HomeController::class, 'postDetail_old']);
Route::get('/detail/{slug}/{id}', [HomeController::class, 'postDetail']);
Route::post('/save-comment/{slug}/{id}', [HomeController::class, 'save_comment']);

// Route::get('/', [HomeController::class, 'home']);

// Loging/out
Route::get('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/login', [AdminController::class, 'submit_login']);
Route::get('/admin/logout', [AdminController::class, 'logout']);
// Settings
Route::get('/admin/setting', [SettingController::class, 'index']);
Route::post('/admin/setting', [SettingController::class, 'save_settings']);

Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
// Categories
Route::get('/admin/category/{id}/delete', [CategoryController::class, 'destroy']);
Route::resource('/admin/category', CategoryController::class);

Route::get('/admin/post/{id}/delete', [PostController::class, 'destroy']);
Route::resource('/admin/post', PostController::class);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('newsletter', NewsletterController::class);


// Users section
Route::get('/user/dashboard', [UsersController::class, 'dashboard']);
Route::get('/user/settings', [UsersController::class, 'account']);
Route::get('/user/maintenance', [UsersController::class, 'maintenance']);