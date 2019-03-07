<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Kyerlo | Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/front_end/style.css')}}">

    <!-- Responsive CSS -->
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

</head>

<body>
    
    @include('layouts.frontLayout.front_header')
    
    @yield('content')
    
    @include('layouts.frontLayout.front_footer')  

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{asset('js/frontend_js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('js/frontend_js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/frontend_js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('js/frontend_js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('js/frontend_js/active.js')}}"></script>

</body>
</html>