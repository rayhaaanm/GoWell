function OpenForm(){
    document.getElementById("pop-up").style.display = "block";
    document.getElementById("bg").style.display = "block";
}
function CloseForm(){
    document.getElementById("pop-up").style.display = "none";
    document.getElementById("bg").style.display = "none";
}
function OpenUpload(){
    var input = document.getElementById('upload');
    input.click();
}

function EditProfile(event){
    var image = document.getElementById('profile-picture-edit');
    var image2 = document.getElementById('profile-picture');
    image.src = URL.createObjectURL(event.target.files[0]);
    image2.src = URL.createObjectURL(event.target.files[0]);
}