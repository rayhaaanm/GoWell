<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href='//fonts.googleapis.com/css?family=Montserrat:thin,extra-light,light,100,200,300,400,500,600,700,800'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css') }}/{{ $css }}">

    <title>{{ $halaman }}</title>
</head>

<body>
    <div class="Container">
        <aside class="sidebar">
            <ul class="sidebar-nav">
                <li class="Judul">
                    <p>
                        <span style="color: #1F4F70;">Go</span><span style="color: #57B9D4;">Well</span> <br>
                        <b>your daily support</b>
                    </p>
                </li>
                <li class="sidebar_menu">
                    <a href="/profile">
                        <i class="bi bi-person-fill" style = "color: #1F4F70;;"></i>Profile
                    </a>

                </li>
                <li class="sidebar_menu">
                    <a href="/dashboard">
                        <i class="bi bi-grid-fill" style = "color: #1F4F70;;"></i>Dashboard
                    </a>

                </li>
                <li class="sidebar_menu">
                    <a href="/analytics">
                        <i class="bi bi-file-bar-graph-fill" style = "color: #1F4F70;;"></i>Analytics
                    </a>

                </li>
                <li class="sidebar_menu">
                    <a href="/news">
                        <i class="bi bi-file-text-fill" style = "color: #1F4F70;;"></i>News
                    </a>

                </li>
                <li class="sidebar_menu">
                    <a href="/support">
                        <i class="bi bi-chat-left-text-fill" style = "color: #1F4F70;;"></i>Support
                    </a>
                </li>
                <li class="sidebar_menu" id="setting">
                    <a href="/setting">
                        <i class="bi bi-gear-fill" style = "color: #1F4F70;;"></i>Setting
                    </a>
                </li>




            </ul>
        </aside>
        <div class="container2">
            @yield('page')
        </div>
    </div>
</body>

</html>
