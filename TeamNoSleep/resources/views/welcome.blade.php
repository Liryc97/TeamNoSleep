<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="assets/plugin/mdb/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/plugin/mdb/css/mdb.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    

        <!-- Fonts -->
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        {{-- <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> --}}
    </head>
    <body>
        {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> --}}
{{--     
            <div class="topnav">
                <a class="active" href="#home">Home</a>
                <a href="#contact"> <span>
                <tr>
                    <ul>
                        <li></li></ul></tr>    
                </span></a>
                <a href="#contact">Contact</a>
                <a href="#about">About</a>
                <a href="#login_signup">Login/Sign up</a>
                
              </div> --}}
              <section class="header">
                <a href="one.html" class="h_link">Website </a>
                <a href="two.html" class="h_link">Gallery </a>
                <a href="three.html" class="h_link">About </a>
                <font class="h_link">Contact Info </font>
            </section>
        
            <p><br></p>
            <section>
                <h2 align="center">Contact Us</h2>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <img src="assets/images/lalaWowee.png" width="100%"><br><center>Twitter</center></div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12"><img src="assets/images/haha.jpg" width="100%"><br><center>Facebook</center></div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12"><img src="assets/images/reknight.png" width="100%"><br><center>Landline</center></div>
                    </div>
                </div>
            </section>
              <div class="legal" style="position: fixed;">
                blah blah blah
                </div>
              <script type="text/javascript" src="assets/plugin/mdb/js/bootstrap.min.js"></script>
              <script type="text/javascript" src="assets/plugin/mdb/js/mdb.min.js"></script>
    </body>
</html>
