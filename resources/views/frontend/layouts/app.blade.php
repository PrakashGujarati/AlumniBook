<!DOCTYPE html>
<html>
<head>
    <title>Alumni Book  @yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome CSS-->
    <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Mobile Menu Css -->
    <link href="{{ asset('assets/menu/css/meanmenu.css') }}" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="{{ asset('assets/owl-carousel/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/owl-carousel/css/owl.theme.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
</head>
<body>
    @include('frontend.includes.header')

    <div class="">
        @yield('content')
    </div>

    
    @include('frontend.includes.footer')    

    @yield('js_script')

</body>
</html>