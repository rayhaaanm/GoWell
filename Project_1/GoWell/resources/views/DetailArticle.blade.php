
@extends('layout.sidebar')
@section('page')
    <div class="blank">
        <center>
            {{ $Article["title"] }} <br>
            Published {{ $Article["tanggal"] }} <br>
            {{ $Article["author"] }} <br>
            <img src="{{ $Article["cover"] }}" alt=""> <br>
            {{ $Article["body"] }}
            
        </center>
    </div>
@endsection