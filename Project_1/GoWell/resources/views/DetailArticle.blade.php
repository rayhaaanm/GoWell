
@extends('layout.sidebar')
@section('page')
    <div class="blank">
        <div class="nav">
            <a href="/news"> News</a>    >     Article
        </div>
       
        <center>
            <h1>
                {{ $Article->title }}
            </h1>
            <h5>
                Published {{ $Article->tanggal }}
            
            </h5>
            <div class="penulis">
                {{ $Article->author }}
            </div>
            <img src="{{ asset($Article->cover) }}" alt=""> 
            <br>
            <div class="body">
                {{ $Article->body }}
            </div>
            
        </center>
    </div>
@endsection