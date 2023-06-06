
@extends('layout.sidebar')
@section('page')
        <div class="blank">
            <div class="container3">
                
                @for ($i = 0; $i < 1; $i++)
                <img id="thumbnail_news" src="{{ $Articles[$i]->cover }}">
                @endfor
            </div>
            @foreach ($Articles as $Article)
            <div class="container4">
                <img id='article_cover'src="{{ $Article->cover }}" >
                <div class="isiarticle">
                    <a href="/news/{{ $Article->id }}">
                        <h2>{{ $Article->title }}</h2>
                    </a>    
                    <h5>
                        Published  {{ $Article->tanggal }} | {{ $Article->author }}
                    </h5>
                </div>
                
            </div>
            <hr>
            @endforeach
            
        
        </div>
 @endsection   