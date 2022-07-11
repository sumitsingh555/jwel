<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no" />
    <meta name="theme-color" content="#1a73e9" />
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />

    <meta name="web-author" content="author_name" />
    <meta name="googlebot" content="all">
    <meta name="revisit-after" content="3 days">
    <meta name="copyright" content="author_name">
    <meta name="language" content="English">
    <meta name="reply-to" content="supportmail@gmail.com">
    <meta name="distribution" content="Global" />
    <meta name="rating" content="General" />

    <meta name="robots" content="index, follow" />
    <!-- Twitter Meta -->
    <meta name="twitter:site" content="@twitter_username">
    <meta name="twitter:creator" content="@twitter_username">
    <meta name="twitter:card" content="summary">

    <!-- Facebook Meta -->
    <meta property="fb:app_id" content="0" />

    <meta property="og:type" content="website">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    @stack('meta')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- jQuery -->
    <script src="{{ asset('public/mainwebsite/assets/plugins/jQuery/jquery-3.6.0.min.js') }}"></script>
    
    <!-- Styles -->
    <!-- Bootstrap == -->
    <link rel="stylesheet" href="{{ asset('public/mainwebsite/assets/plugins/do-not-edit/css/bootstrap.min.css') }}">

    <!-- IMG Icons == -->
    <link rel="stylesheet" href="{{ asset('public/mainwebsite/assets/plugins/do-not-edit/css/imgIcons.min.css') }}">

    <!-- BijarniaDream == -->
    <link rel="stylesheet" href="{{ asset('public/mainwebsite/assets/plugins/do-not-edit/css/bijarniadream.min.css') }}">

    @stack('styles')

    <!-- custom styles (optional) -->
    <link rel="stylesheet" href="{{ asset('public/mainwebsite/assets/plugins/do-not-edit/css/style.min.css') }}" />
</head>
<body>
    @include('frontend/layouts.preloader')
    @include('frontend/layouts.header')
    <main class="main-scrollbar">
        @yield('content')
    </main>

    @include('frontend/layouts.footer')

    <!-- Optional JavaScript -->
    <script src="{{ asset('public/mainwebsite/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
    @stack('scripts')

    <script src="{{ asset('public/mainwebsite/assets/js/main.min.js') }}"></script>

</body>
</html>
