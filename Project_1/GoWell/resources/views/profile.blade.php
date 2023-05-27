@extends('layout.sidebar')
@section('page')
<div class="box">
            <div class="profile-box">
                <img src="./images/lisa.jpg" class="profile-picture">
                <div class="profile-column">
                    <div class="profile-desc">
                        {{ $user->fullname }}
                    </div>
                    <div class="profile-button">
                        <a href="/setting">
                            <div class="button" >
                                <p>Edit profile</p>
                            </div>
                        </a>
                    </div>

        
        
                </div>
            </div>
            <div class="blue-box">
                
            </div>
        </div>
@endsection