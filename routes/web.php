<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SupportController;

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
Route::middleware("guest:admin")->group(function(){
    Route::get('/admin/login', [AdminController::class, 'login']);
    Route::post('/admin/login', [AdminController::class, 'submit_login']);
});
// Settings
Route::middleware("auth:admin")->group(function(){
    Route::get('/admin/logout', [AdminController::class, 'logout']);

    Route::get('/admin/setting', [SettingController::class, 'index']);
    Route::post('/admin/setting', [SettingController::class, 'save_settings']);
    
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    // Categories
    Route::get('/admin/category/{id}/delete', [CategoryController::class, 'destroy']);
    Route::resource('/admin/category', CategoryController::class);
    
    Route::get('/admin/post/{id}/delete', [PostController::class, 'destroy']);
    Route::resource('/admin/post', PostController::class);
    

});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('newsletter', NewsletterController::class);


// Users section
Route::middleware("auth")->group(function(){
    Route::get('/user/dashboard', [UsersController::class, 'dashboard']);
    // Route::get('/user/settings', [UsersController::class, 'account']);
    Route::get('/user/connexions', [UsersController::class, 'maintenance']);
    Route::get('/user/use_points', [UsersController::class, 'use_points']);
    Route::get('/user/my_points', [UsersController::class, 'my_points']);

    Route::resource('/user/settings', UsersController::class);
    Route::resource('/user/support', SupportController::class);
});