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
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ExaminationController;
use App\Http\Controllers\Packs\Pack_validityController;
use App\Http\Controllers\Packs\Examination_packController;
use App\Http\Controllers\TcfCanada\TcfCanadaController;
use App\Http\Controllers\TcfCanada\Tcf_canada_ceController;
use App\Http\Controllers\TcfCanada\Tcf_canada_coController;
use App\Http\Controllers\TcfCanada\Tcf_canada_eeController;

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
Route::get('/by_dev', [HomeController::class, 'dev']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/about', [HomeController::class, 'about']);

Route::resource('newsletter', NewsletterController::class);

// Chosing pack
Route::get('/pack/{id}/chose', [ExaminationController::class, 'chose_pack']);
Route::get('/pack/{slug}/{id}/{exam_id}', [ExaminationController::class, 'pack_details']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/boutique', function () {
    return view('maintenance');
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
    
    // Posts
    Route::get('/admin/post/{id}/delete', [PostController::class, 'destroy']);
    Route::resource('/admin/post', PostController::class);

    // Users
    Route::get('/admin/users', [UsersController::class, 'users']);

    // Teams
    Route::get('/admin/team/{id}/delete', [TeamController::class, 'destroy']);
    Route::resource('/admin/team', TeamController::class);
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');



// Users section
Route::middleware("auth")->group(function(){
    Route::get('/user/dashboard', [UsersController::class, 'dashboard']);
    // Route::get('/user/settings', [UsersController::class, 'account']);
    Route::get('/user/connexions', [UsersController::class, 'maintenance']);
    Route::get('/user/use_points', [UsersController::class, 'use_points']);
    // Route::get('/user/my_points', [UsersController::class, 'my_points']);
    Route::get('/user/my_wallet', [UsersController::class, 'maintenance']);
    Route::get('user/notifications', [UsersController::class, 'maintenance']);

    Route::resource('/user/settings', UsersController::class);
    Route::resource('/user/support', SupportController::class);

    // Valid Packs
    Route::get('user/{id}/packs', [Pack_validityController::class, 'user_index']);
    Route::get('user/tcf_canada', [TcfCanadaController::class, 'user_index']);

    // TCF Canada
    Route::get('user/tcfc/{session}', [TcfCanadaController::class, 'tcf_session']);
    Route::get('user/tcfc/{session}/write', [TcfCanadaController::class, 'write']);
    Route::post('/user/tcfc_ce/{tcfc_id}/correct/{exam_id}', [Tcf_canada_ceController::class, 'submit_test']);
    Route::post('/user/tcfc_co/{tcfc_id}/correct/{exam_id}', [Tcf_canada_coController::class, 'submit_test']);
    Route::post('/user/tcfc_ee/{tcfc_id}/correct/{exam_id}', [Tcf_canada_eeController::class, 'submit_test']);

    // *****************************************************
    // *  ALl these are the routes of the content manager  *
    // *****************************************************

    // Packs
    Route::get('user/emp/cm/packs', [Examination_packController::class, 'index']);
    Route::get('/user/emp/cm/packs/{id}/delete', [Examination_packController::class, 'destroy']);
    Route::resource('user/emp/cm/packs', Examination_packController::class);

    // TCF_Canada
    Route::get('user/emp/cm/tcfcanada', [TcfCanadaController::class, 'cm_index']);
    Route::get('user/emp/cm/{id}/tcfcanada', [TcfCanadaController::class, 'cm_index_see']);

    // TCF_Canada CE
    Route::get('user/emp/cm/tcfc_ce/{id}/add', [Tcf_canada_ceController::class, 'custom_create']);
    Route::post('user/emp/cm/tcfc_ce/{id}/addq', [Tcf_canada_ceController::class, 'custom_store']);
});

// Content Manager section
