function validate(){
    if((document.getElementById("name").value =="")&&(document.getElementById("pass").value =="")){
        Swal.fire({
            title: "Error!",
            text: "Mohon Lengkapi data!",
            icon: 'error',
            confirmButtonColor: '#57B9D4',
        })
    } else if(document.getElementById("name").value == ""){
        Swal.fire({
            title: "Error!",
            text: "Username tidak boleh kosong!",
            icon: 'error',
            confirmButtonColor: '#57B9D4',
        })
    } else if(document.getElementById("pass").value ==""){
        Swal.fire({
            title: "Error!",
            text: "Password tidak boleh kosong!",
            icon: 'error',
            confirmButtonColor: '#57B9D4',
        })
    } else{
        Swal.fire({
            title: "Berhasil",
            text: "Login Berhasil",
            icon: 'success',
            confirmButtonColor: '#57B9D4',
            
        }).then((result) => {
            if (result.isConfirmed) {
               window.location.href="/dashboard";
            }
    })
    }
}