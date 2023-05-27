<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\News;
use App\Models\User;
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

Route::get('/', function () {
    return view('index');
})->middleware('guest');
Route::get('/dashboard', function () {
    return view('dashboard',[
        'halaman' => 'GoWell : Dashboard',
        'css' => 'dashboard.css'
    ]);
})->middleware('auth');
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
Route::get('/admin', function(){
    return view('admindashboard',[
        'halaman' => 'GoWell : Admin',
        // 'css' => 'admindashboard.css',
    ]);
})->middleware('admin');

Route::get('/news/{slug}', [ArticleController::class, 'Detail'])->middleware('auth');
Route::get('/profile', function () {
    return view('profile',[
        'halaman' => 'GoWell : Profile',
        'css' => 'profile.css',
        'user' => Auth::user(),
    ]);
})->middleware('auth');
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