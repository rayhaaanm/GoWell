<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css') }}/{{ $css }}">
    <link href='//fonts.googleapis.com/css?family=Montserrat:thin,extra-light,light,100,200,300,400,500,600,700,800' 
    rel='stylesheet' type='text/css'>
    <title>{{ $halaman }}</title>
</head>
<body>
    <script src="./js/setting.js"></script>
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
            <img id="Icon" src="{{ asset('images/user_alt_fill.png') }}"> <a href="/profile" ><button type="button"> Profile</button type="button"></a>
        
        </li>
        <li class="sidebar_menu">
            <img id="Icon" src="{{ asset('images/darhboard.png') }}" > <a href="/dashboard"><button type="button"> Dashboard</button type="button"></a>
         
        </li>
        <li class="sidebar_menu">
            <img id="Icon"src="{{ asset('images/Chart.png') }}" > <a href="/analytics" ><button type="button"> Analytics</button type="button"></a>
         
        </li>
        <li class="sidebar_menu">
            <img id="Icon"src="{{ asset('images/Desk_alt.png') }}"> <a href="/news" ><button type="button"> News</button type="button"></a>
         
        </li>
        <li class="sidebar_menu">
            <img id="Icon"src="{{ asset('images/Chat.png') }}" > <a href="/support" ><button type="button"> Support</button type="button"></a>
        </li>
        <li class="sidebar_menu">
            <img id="Icon"src="{{ asset('images/Setting_line.png') }}" > <a href="/setting" ><button type="button"> Settings</button type="button"></a>
        </li>  

        
        
         
</ul>
</aside>
    <div class="container2">
        @yield('page')
    </div>
    </div>
    </body>
</html>
