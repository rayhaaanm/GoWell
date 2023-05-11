
@extends('layout.sidebar')
@section('page')
        <div class="blank">
            <div class="container3">
                @foreach ($Articles as $Article)
                <img id="thumbnail_news"src="{{ $Article["cover"] }}">
                @endforeach
            </div>
            @foreach ($Articles as $Article)
            <div class="container4">
                <img id='article_cover'src="{{ $Article["cover"] }}" >
                <div class="isiarticle">
                    <a href="/news/{{ $Article["slug"] }}">
                        <h2>{{ $Article["title"] }}</h2>
                    </a>    
                    <h5>
                        Published  {{ $Article["tanggal"] }} | {{ $Article["author"] }}
                    </h5>
                </div>
                
            </div>
            @endforeach
            
        
        </div>
 @endsection   