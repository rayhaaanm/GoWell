<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='//fonts.googleapis.com/css?family=Montserrat:thin,extra-light,light,100,200,300,400,500,600,700,800' 
    rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  
    <link rel="stylesheet" href="{{ asset('css') }}/{{ $css }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $halaman }}</title>
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <ul class="sidebar-nav">
                <li class="Judul">
                    <p>
                        <span style="color: #FF4F00;">Go</span><span style="color: #FFA300;">Well</span> <br>
                    <b>your daily support</b>
                    </p>
                </li>
                <li class="sidebar_menu">
                    <i class="bi bi-person-fill" style = "color: #FF4F00;"></i>Profile</a>
                </li>
                <li class="sidebar_menu">
                    <i class="bi bi-person-fill" style = "color: #FF4F00;"></i>Profile</a>
                </li>
                <li class="sidebar_menu">
                    <i class="bi bi-person-fill" style = "color: #FF4F00;"></i>Profile</a>
                </li>
                <li class="sidebar_menu">
                    <i class="bi bi-person-fill" style = "color: #FF4F00;"></i>Profile</a>
                </li>
            </ul>
        </aside>
        <div class="container2">
            @yield('page')
        </div>
    </div>
    
</body>
</html>