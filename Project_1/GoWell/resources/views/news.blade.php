
@extends('layout.sidebar')
@section('page')
        <div class="blank">
            <div class="container3">
                <img id="thumbnail_news"src="images/news.png">
                <img id="thumbnail_news"src="images/news.png">
            </div>
            <div class="container4">
                <img id='article_cover'src="{{ $Article["cover"] }}" >
                <p>{{ $Article["title"] }}</p>
                
            </div>
            
        
        </div>
 @endsection   