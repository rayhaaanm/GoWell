<?php

use App\Http\Controllers\DashboardController;
use App\Models\News;
use App\Models\User;
use App\Models\UridAcid;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GlucoseController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UridAcidController;
use App\Http\Controllers\BloodPressController;
use App\Http\Controllers\KolesterolController;


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

Route::get('/', function () {
    return view('index');
})->middleware('guest');
Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth');
Route::get('/dashboard/UridAcid', [DashboardController::class,'UridAcid'])->middleware('auth');
Route::get('/dashboard/Glucose', [DashboardController::class,'Glucose'])->middleware('auth');
Route::get('/dashboard/Kolesterol', [DashboardController::class,'Kolesterol'])->middleware('auth');
Route::get('/dashboard/BloodPress', [DashboardController::class,'BloodPress'])->middleware('auth');
Route::get('/analytics', function () {
    return view('analytics',[
        'halaman' => 'GoWell : Analytics',
        'css' => 'analytics.css'
    ]);
})->middleware('auth');
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');;
Route::post('/login', [LoginController::class,'auth']);
Route::post('/logout', [LoginController::class,'logout']);
Route::get('/news', [ArticleController::class, 'index'])->middleware('auth');


Route::get('/news/{slug}', [ArticleController::class, 'Detail'])->middleware('auth');
Route::get('/profile', function () {
    return view('profile',[
        'halaman' => 'GoWell : Profile',
        'css' => 'profile.css',
        'user' => Auth::user(),
    ]);
})->middleware('auth');
Route::post('/profile/glucose', [GlucoseController::class,'store'])->middleware('auth');
Route::post('/profile/kolesterol', [KolesterolController::class,'store'])->middleware('auth');
Route::post('/profile/uridacid', [UridAcidController::class,'store'])->middleware('auth');
Route::post('/profile/bloodpress', [BloodPressController::class,'store'])->middleware('auth');
Route::get('/setting', function () {
    return view('settings',[
        'halaman' => 'GoWell : Settings',
        'css' => 'settings.css',
        'user' => Auth::user(),
    ]);
})->middleware('auth');
Route::get('/register', [RegisterController::class,'index'])->middleware('guest');;
Route::post('/register', [RegisterController::class,'store']);
Route::get('/support', function () {
    return view('support',[
        'halaman' => 'GoWell : Support',
        'css' => 'support.css'
    ]);
})->middleware('auth');
Route::get('/admin', function(){
    return view('admindashboard',[
        'halaman' => 'GoWell : Admin',
        'css' => 'dashboardadmin.css',
    ]);
})->middleware('admin');
Route::get('/admin/settings', [AdminController::class,'settings'])->middleware('admin');
Route::get('/admin/news', [AdminController::class,'article'])->middleware('admin');
Route::post('/admin/news', [AdminController::class,'store'])->middleware('admin');
Route::delete('/admin/news/{id}', [AdminController::class, 'deleteArticle'])->middleware('admin')->name('news.delete');
Route::put('/admin/news/{id}', [AdminController::class, 'updateArticle'])->middleware('admin')->name('news.update');
Route::get('/admin/user', [AdminController::class,'user'])->middleware('admin');
Route::get('/admin/news/checkSlug',[AdminController::class.'checkSlug'])->middleware('admin');
Route::delete('/admin/user/{id}', [AdminController::class, 'deleteUser'])->middleware('admin')->name('user.delete');
Route::put('/admin/user/{id}', [AdminController::class, 'updateUsers'])->middleware('admin')->name('user.update');


