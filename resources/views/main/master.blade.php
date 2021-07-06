<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/Style/master.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <header class="header">
        <div class="nav-container">
            <a href="{{ url('./') }}">Home</a>
            <a href="{{ url('/content') }}">Content</a>
            <a href="{{ url('/video')}}">Video</a>
            <a href="{{ url('/audio') }}">Audio</a>
            <a href="{{ url('/contact') }}">Contact</a>
        </div>
    </header>
    <body>
        <div class="main-container">
            @section('content')
        
            @show

            @section('video')
            
            @show

            @section('audio')
            
            @show

            @section('contact')
            
            @show
        </div>
    </body>

    <footer>
        <h3>This site is develope by @Atik</h3>
        <h5>updated@2021</h5>
    </footer>
</body>
</html>