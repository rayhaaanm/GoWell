<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='//fonts.googleapis.com/css?family=Montserrat:thin,extra-light,light,100,200,300,400,500,600,700,800' 
    rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
  
  
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
                    <a href="/">
                        <i class="bi bi-grid-fill" style = "color: #FF4F00;"></i>Profile
                    </a>
                    
                </li>
                <li class="sidebar_menu">
                    <a href="/admin/user">
                        <i class="bi bi-person-fill" style = "color: #FF4F00;"></i>Users
                    </a>
                    
                </li>
                <li class="sidebar_menu">
                    <a href="/admin/news">
                        <i class="bi bi-file-bar-graph-fill" style = "color: #FF4F00;"></i>Articles
                    </a>
                </li>
                <li class="sidebar_menu" id="settings">
                    <a href="/admin/settings">
                        <i class="bi bi-gear" style = "color: #FF4F00;"></i>Settings
                    </a>
                </li>
            </ul>
        </aside>
        <div class="container2">
            @yield('page')
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</body>
</html>