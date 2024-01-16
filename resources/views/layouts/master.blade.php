<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <title>Parking</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- bootstrap css -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
        <!-- Responsive-->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/gif" />
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    </head>
    <body>
        {{-- <div class="header_section"> --}}
            {{-- header section start --}}
            @include('header')
            {{-- header section end  --}}

            {{-- Main Content Start --}}
                @yield('content')
            {{-- Main Content End --}}

            <!-- footer section start -->
            @include('footer')
            <!-- footer section end -->
        {{-- </div> --}}
        
        
        <!-- Javascript files-->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
        <script src="{{asset('js/plugin.js')}}"></script>
        

    </body>
</html>