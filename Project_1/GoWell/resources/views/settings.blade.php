@extends('layout.sidebar')
@section('page')


    <div class="blank">
        <p id="settings">User Settings</p>
        <div class="profile">
            <img class="profile-picture" id="profile-picture"src="{{ asset($user->profile_picture) }}" >
            <div class="profile-column">
            <div class="profile-desc">
                    {{$user->fullname}}
            </div>
            <div class="profile-button">
                <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#exampleModal" id="edit-photo">
                    <i class="bi bi-pencil-fill"></i>
                    Edit
                  </button>
                  <form action="/logout" method="post" >
                    @csrf
                    <button class="button" type="submit" id="Log-Out">
                        <i class="bi bi-box-arrow-in-right"></i>
                            <p>Log Out</p>
                    </button>
                </form>
            </div>
        </div>

        </div>
        <span>General Information</span>
        <form action="/setting/editname/{{ $user->id }}" method="POST">
            @csrf
            @method('put')
        <div class="edit-profile">
            <input type="text" name="name" value="{{ $user->fullname }}">
            <button type="submit" class="button"  id="edit-photo">
                <i class="bi bi-pencil-fill"></i>
                Edit Name
              </button>
        </div>
    </form>
        <form action="/setting/editemail/{{ $user->id }}" method="POST">
            @csrf
            @method('put')
        <div class="edit-profile">
            
                <input type="email" name="email" value="{{ $user->email }}">
                <button type="submit" class="button"  id="edit-photo">
                    <i class="bi bi-pencil-fill"></i>
                    Edit Email
                  </button>
        </div>
    </form>
</form>
<form action="/setting/editpass/{{ $user->id }}" method="POST">
    @csrf
    @method('put')
<div class="edit-profile">
    
        <input type="password" name="pass" value="{{ $user->password }}">
        <button type="submit" class="button"  id="edit-photo">
            <i class="bi bi-pencil-fill"></i>
            Edit Pass
          </button>
</div>
</form>
        </div>


        
        
        
    
    
    
        
    </div>
    <div class="bg" id="bg"></div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="/setting/editphoto/{{ $user->id }}" method="POST">
                @csrf
                @method('PUT')
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profile</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <center>
                    <img class="profile-picture" id="profile-picture-edit" src="{{ asset($user->profile_picture) }}" >
                    <div class="form-group">
                        <input type="text" value="{{ $user->profile_picture }}" name="profile">
                    </div>
                </center>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
          </div>
        </div>
      </div>
      
    {{-- <div class="pop-up" id="pop-up">
        <center>
            <p>Edit Profile Photo</p>
            <img class="profile-picture" id="profile-picture-edit" src="{{ asset($user->profile_picture) }}" >
            <form action="">
                @csrf
                <button class="pop-up-button" id="upload-photo" onclick="OpenUpload()">Upload Photo</button>
            
            <div class="pop-up-button" id="delete-photo">
                Delete Photo
            </div>
            <a href="#" onclick="CloseForm()">
                <div class="pop-up-button" id="save-photo" >
                    Save changes
                </div>
            </a>
            </form>
        </center>
        <input  id="upload" onchange="EditProfile(event)" type="file">
    </div> --}}
@endsection