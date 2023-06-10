function validate(){
    if ((document.getElementById("name").value =="")&& (document.getElementById("user").value=="")&&(document.getElementById("email").value=="")&&(document.getElementById("pass").value=="")&&(document.getElementById("repass").value=="")){
        Swal.fire({
            title: "Error!",
            text: "Mohon Lengkapi data!",
            icon: 'error',
            confirmButtonColor: '#57B9D4',
        })
    } else if(document.getElementById('name').value==""){
        Swal.fire({
            title: "Error!",
            text: "Nama tidak boleh kosong",
            icon: 'error',
            confirmButtonColor: '#57B9D4',
        })
    } else if(document.getElementById('user').value==""){
        Swal.fire({
            title: "Error!",
            text: "Username tidak boleh kosong!",
            icon: 'error',
            confirmButtonColor: '#57B9D4',
        })
    } else if(document.getElementById('email').value==""){
        Swal.fire({
            title: "Error!",
            text: "Email tidak boleh kosong!",
            icon: 'error',
            confirmButtonColor: '#57B9D4',
        })
    } else if(document.getElementById('pass').value==""){
        Swal.fire({
            title: "Error!",
            text: "Password tidak boleh kosong!",
            icon: 'error',
            confirmButtonColor: '#57B9D4',
        })
    } else if(document.getElementById('repass').value==""){
        Swal.fire({
            title: "Error!",
            text: "Confirm Password tidak boleh kosong!",
            icon: 'error',
            confirmButtonColor: '#57B9D4',
        })
    } else if(document.getElementById('pass').value != document.getElementById('repass').value){
        Swal.fire({
            title: "Error!",
            text: "Password dan Confirm Password tidak sama!",
            icon: 'error',
            confirmButtonColor: '#57B9D4',
        })
    } else {
            Swal.fire({
                title: "Berhasil",
                text: "Account registered",
                icon: 'success',
                confirmButtonColor: '#57B9D4',
                
            }).then((result) => {
                if (result.isConfirmed) {
                window.location.href="/login";
                form.submit;
                }
        })
}
}