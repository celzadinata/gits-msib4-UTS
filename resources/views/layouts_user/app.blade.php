<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Toko-ku</title>
    <link href="{{ asset('assets/user/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/img_preview.css') }}">
    <script src="{{ asset('assets/js/preview_img.js') }}"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('user/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ asset('assets/user/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ asset('assets/user/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{ asset('assets/user/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed"
        href="{{ asset('assets/user/images/ico/apple-touch-icon-57-precomposed.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="assets/user/images/home/logo.png" alt="" sizes="16x16" />

</head>
<!--/head-->

<body>
    {{-- Header --}}
    @include('layouts_user.navbar')
    {{-- End Header --}}

    {{-- Content --}}
    @yield('content')
    {{-- End Content --}}

    {{-- Footer --}}
    @include('layouts_user.footer')
    {{-- End Footer --}}
    @include('sweetalert::alert')

    <script src="{{ asset('assets/user/js/cart.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/user/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/price-range.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('assets/user/js/main.js') }}"></script>
</body>

</html>
