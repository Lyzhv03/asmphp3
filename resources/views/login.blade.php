<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Courses | Education</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="{{ asset('courses-master/site.webmanifest') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('courses-master/assets/img/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('courses-master/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('courses-master/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('courses-master/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('courses-master/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('courses-master/assets/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('courses-master/assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('courses-master/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('courses-master/assets/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('courses-master/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('courses-master/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('courses-master/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('courses-master/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('courses-master/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('courses-master/assets/css/style.css') }}">

</head>

<body>
    {{-- <main class="login-body" data-vide-bg="{{asset('courses-master/assets/img/hero/hero2.png')}}"> --}}
    <main class="login-body" style="background-color: blanchedalmond;">
        <form class="form-default" action="{{ route('postLogin') }}" method="post">
            @csrf
            <div class="login-form">
                <div class="logo-login">
                    <a href="{{route('book.home')}}"><img src="{{asset('courses-master/assets/img/logo/loder.png') }}" alt=""></a>
                </div>
                <h2>Login Here</h2>
                <div class="form-input">
                    <label for="">Email</label>
                    <input type="email" name="email" id="" class="form-control">
                </div>

                <div class="form-input">
                    <label for="">Password</label>
                    <input type="password" name="password" id="" class="form-control">
                </div>

                <div class="form-input pt-30">
                    <button type="submit" class="btn btn-success">Login</button>
                    <a href="{{ route('register') }}" class="btn btn-info">Register</a>
                </div>
            </div>
            @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        @if (session('errorLogin'))
            <div class="alert alert-danger">{{ session('errorLogin') }}</div>
        @endif
        </form>



        <!-- JS here -->
        <script src="{{ asset('courses-master/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="{{ asset('courses-master/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('courses-master/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('courses-master/assets/js/bootstrap.min.js') }}"></script>
        <!-- Jquery Mobile Menu -->
        <script src="{{ asset('courses-master/assets/js/jquery.slicknav.min.js') }}"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('courses-master/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('courses-master/assets/js/slick.min.js') }}"></script>
        <!-- One Page, Animated-HeadLin -->
        <script src="{{ asset('courses-master/assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('courses-master/assets/js/animated.headline.js') }}"></script>
        <script src="{{ asset('courses-master/assets/js/jquery.magnific-popup.js') }}"></script>

        <!-- Date Picker -->
        <script src="{{ asset('courses-master/assets/js/gijgo.min.js') }}"></script>
        <!-- Nice-select, sticky -->
        <script src="{{ asset('courses-master/assets/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('courses-master/assets/js/jquery.sticky.js') }}"></script>
        <!-- Progress -->
        <script src="{{ asset('courses-master/assets/js/jquery.barfiller.js') }}"></script>

        <!-- counter , waypoint,Hover Direction -->
        <script src="{{ asset('courses-master/assets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('courses-master/assets/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('courses-master/assets/js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('courses-master/assets/js/hover-direction-snake.min.js') }}"></script>

        <!-- contact js -->
        <script src="{{ asset('courses-master/assets/js/contact.js') }}"></script>
        <script src="{{ asset('courses-master/assets/js/jquery.form.js') }}"></script>
        <script src="{{ asset('courses-master/assets/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('courses-master/assets/js/mail-script.js') }}"></script>
        <script src="{{ asset('courses-master/assets/js/jquery.ajaxchimp.min.js') }}"></script>

        <!-- Jquery Plugins, main Jquery -->
        <script src="{{ asset('courses-master/assets/js/plugins.js') }}"></script>
        <script src="{{ asset('courses-master/assets/js/main.js') }}"></script>

</body>

</html>
