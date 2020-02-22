<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/assets/plugin/mdb/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/plugin/mdb/css/mdb.css')}}">
</head>
<body>
<header>
    <div class="header">
        <div class="nav-bar">
            <table>
                <td>Home</td>
            </table>
        </div>
        
    </div>
</header>

@yield('content')

<script src="{{asset('assets/plugin/mdb/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('assets/plugin/mdb/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/plugin/mdb/js/mdb.js')}}"></script>
</body>
</html>