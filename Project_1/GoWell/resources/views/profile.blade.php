@extends('layout.sidebar')
@section('page')
    <div class="box">
        <div class="profile-box">
            <img src="{{ asset($user->profile_picture) }}" class="profile-picture">
            <div class="profile-column">
                <div class="profile-desc">
                    {{ $user->fullname }}
                </div>
                <div class="profile-button">
                    <a href="/setting">
                        <div class="button">
                            <p>Edit profile</p>
                        </div>
                    </a>
                </div>



            </div>
        </div>
        <div class="blue-box">
            <div class="data_shape">
                <div class="column">
                    <center>
                        <p id="jenis">Glucose</p>
                        <form action="/profile/glucose" method="POST">
                            @csrf
                            <input type="number" name="angka" id="angka">
                            <input type="date" name="periode" id="periode">
                            <button type="submit" class="btn btn-outline-info">Submit</button>
                        </form>
                    </center>
                </div>

            </div>
            <div class="data_shape">
                <div class="column">
                    <center>
                        <p id="jenis">Cholesterol</p>
                        <form action="/profile/kolesterol" method="POST">
                            @csrf
                            <input type="number" name="angka" id="angka">
                            <input type="date" name="periode" id="periode">
                            <button type="submit" class="btn btn-outline-info">Submit</button>
                        </form>
                        
                    </center>
                </div>

            </div>
            <div class="data_shape">
                <div class="column">
                    <center>
                        <p id="jenis">Blood Press</p>
                        <form action="/profile/bloodpress" method="POST">
                            @csrf
                            <input type="number" name="angka" id="angka">
                            <input type="date" name="periode" id="periode">
                            <button type="submit" class="btn btn-outline-info">Submit</button>
                        </form>
                        
                    </center>
                </div>

            </div>
            <div class="data_shape">
                <div class="column">
                    <center>
                        <p id="jenis">Urid Acid</p>
                        <form action="/profile/uridacid" method="POST">
                            @csrf
                            <input type="number" name="angka" id="angka">
                            <input type="date" name="periode" id="periode">
                            <button type="submit" class="btn btn-outline-info">Submit</button>
                        </form>
                        
                    </center>
                </div>

            </div>
        </div>
        @if(session()->has('success'))
        <div class="alert alert-info" role="alert">
            {{ session('success') }}
          </div>
        @endif
    </div>
@endsection
