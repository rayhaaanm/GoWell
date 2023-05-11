<?php

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
Route::get('/login', function () {
    return view('login');
});
Route::get('/news', function () {
    return view('news',[
        'halaman' => 'GoWell : News',
        'css' => 'news.css',
        'Articles' => News::all()

    ]);
});
Route::get('/news/{slug}', function($slug){
    return view('DetailArticle',[
        'halaman' => 'GoWell : News',
        'css' => 'detail.css',
        'Article' => News::find($slug),
    ]);

});
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
Route::get('/register', function () {
    return view('signup');
});
Route::get('/support', function () {
    return view('support',[
        'halaman' => 'GoWell : Support',
        'css' => 'support.css'
    ]);
});