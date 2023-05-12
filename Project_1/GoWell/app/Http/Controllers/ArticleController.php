<?php

namespace App\Http\Controllers;
use App\Models\News;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        return view('news',[
            'halaman' => 'GoWell : News',
            'css' => 'news.css',
            'Articles' => News::all()
    
        ]);
    }

    public function Detail($slug){
        return view('DetailArticle',[
            'halaman' => 'GoWell : News',
            'css' => 'detail.css',
            'Article' => News::find($slug),
        ]);
    }
}
