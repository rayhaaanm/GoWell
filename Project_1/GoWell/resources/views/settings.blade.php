@extends('layout.sidebar')
@section('page')
<script src="./js/setting.js"></script>
    <div class="blank">
        <p>User Settings</p>
        <div class="profile">
            <img class="profile-picture" id="profile-picture"src="./images/lisa.jpg" >
            <div class="profile-column">
            <div class="profile-desc">
                    {{$Nama}}
            </div>
            <div class="profile-button">
                <a href="#" onclick="OpenForm()" >
                    <div class="button" id="edit-photo" >
                        <img src="./images/pensil.png">
                        <p>Edit Photo</p>
                    </div>
                </a>
                <a href="/" >
                    <div class="button" id="Log-Out">
                        <img src="./images/out.png" >
                        <p>Log Out</p>
                    </div>
                </a>
            </div>
        </div>

        </div>
        <span>General Information</span>
        <div class="edit-profile">
            <input type="text" name="Name">
            <span>Edit Name</span>
        </div>
        <div class="edit-profile">
            <input type="email" name="email">
            <span>Edit Name</span>
        </div>
        <div class="edit-profile">
            <input type="password" name="pass">
            <span>Edit Name</span>
        </div>
        </div>


        
        
        
    
    
    
        
    </div>
    <div class="bg" id="bg"></div>
    <div class="pop-up" id="pop-up">
        <center>
            <p>Edit Profile Photo</p>
            <img class="profile-picture" id="profile-picture-edit" src="./images/lisa.jpg" >
            <button class="pop-up-button" id="upload-photo" onclick="OpenUpload()">Upload Photo</button>
            
            <div class="pop-up-button" id="delete-photo">
                Delete Photo
            </div>
            <a href="#" onclick="CloseForm()">
                <div class="pop-up-button" id="save-photo" >
                    Save changes
                </div>
            </a>
        </center>
        <input  id="upload" onchange="EditProfile(event)" type="file">
    </div>
@endsection