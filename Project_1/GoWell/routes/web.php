<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\News;
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
});
Route::get('/dashboard', function () {
    return view('dashboard',[
        'halaman' => 'GoWell : Dashboard',
        'css' => 'dashboard.css'
    ]);
});
Route::get('/analytics', function () {
    return view('analytics',[
        'halaman' => 'GoWell : Analytics',
        'css' => 'analytics.css'
    ]);
});
Route::get('/login', [LoginController::class,'index']);
Route::post('/login', [LoginController::class,'auth']);
Route::get('/news', [ArticleController::class, 'index']);

Route::get('/news/{slug}', [ArticleController::class, 'Detail']);
Route::get('/profile', function () {
    return view('profile',[
        'halaman' => 'GoWell : Profile',
        'css' => 'profile.css',
        'Nama' => 'Lalisa Manoban'
    ]);
});
Route::get('/setting', function () {
    return view('settings',[
        'halaman' => 'GoWell : Settings',
        'css' => 'settings.css',
        'Nama' => 'Lalisa Manoban'
    ]);
});
Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);
Route::get('/support', function () {
    return view('support',[
        'halaman' => 'GoWell : Support',
        'css' => 'support.css'
    ]);
});