@extends('layout.adminbar')
@section('page')
<div class="blank">
    <form action="/logout" method="post" >
        @csrf
        <button class="button" type="submit" id="Log-Out">
                <img src="./images/out.png" >
                <p>Log Out</p>
        </button>
    </form>
</button>
</div>
@endsection