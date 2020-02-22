
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>
    
    <link rel="stylesheet" type="text/css" href="assets/plugin/mdb/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/plugin/mdb/css/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  

	<script type="text/javascript" src="assets/plugin/mdb/js/jquery-3.4.1.min.js"></script>

    </head>

    <body class="main">

        <div class="menu-bar col-lg-12 col-md-12 col-sm-12 " >
                <ul>
                    <li class="active"> <a href="#">Home</a> </li>
                    <li> <a href="#">Arts </a> 
                    <div class="sub-menu-1">
                        <ul>
                            <li> <a href="#">Drawing</a> </li>
                            <li> <a href="#">Painting</a> </li>
                            <li> <a href="#">Photography</a> </li>
                            <li> <a href="#">Sculpture</a> </li>
                            
                        </ul>
                    </div>
                </li>
                    <li><a href="">Works</a> </li>
                    <li><a href="">Shop</a> </li>
                    <li><a href="">Contact Us</a> </li>
                    <li><a href="">About Us</a> </li>
                    <li><a href="">Login/Signup</a> </li>
                </ul>
        </div>
@yield('content')

    <script type="text/javascript" src="assets/plugin/mdb/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugin/mdb/js/mdb.min.js"></script>
    
    
    </body>
</html>
