<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;

class NewsController extends Controller
{
    public function index(){
        return view('news',[
            'halaman' => 'GoWell : News',
            'css' => 'news.css',
            'Articles' => News::all()
    
        ]);
    }
    
}
