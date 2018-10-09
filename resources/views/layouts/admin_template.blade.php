<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Movie Ticket">
    <meta name="keywords" content="Movie Ticket">
    <meta name="author" content="Movie Ticket">
    <title>@yield('title')</title>

    <!-- include.head -->
    @yield('head')
    @include('layouts.admin.include.head')

</head>
<body class="horizontal-layout horizontal-menu 2-columns   menu-expanded" data-open="hover"
      data-menu="horizontal-menu" data-col="2-columns">

<!-- fixed-top-->
@include('layouts.admin.include.fixed_top_header')

<!-- //////////// Top Menu //////////////////-->
@include('layouts.admin.include.top_menu')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">

            @yield('content-body')

        </div>
    </div>
</div>

<!-- /////// Footer ///////////////-->
@include('layouts.admin.include.footer')

<!-- JavaScript -->
@include('layouts.admin.include.script')

@yield('js_script')

</body>
</html>
