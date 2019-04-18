<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="format-detection" content="telephone=no">
    <meta name='robots' content='noindex,follow' />
    <meta name="description" content="Where Developers Learn, Share experiences on programing and also place that provide equipment and solutions on technology.">
    <meta name="keywords" content="Developer, Programing, Technological equipments, Technological solutions, Java, PHP, Net, SQL, Angular, JS, HTML, CSS">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://huudai.com">
    <meta property="og:site_name" content="Hữu Đại">
    <meta property="og:image" content="public/favicon.ico">
    <meta property="og:title" content="Hữu Đại - Blog specialize on equipment and solutions on technology">
    <meta property="og:description" content="Where Developers Learn, Share experiences on programing and also place that provide equipment and solutions on technology.">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:domain" content="https://huudai.com">
    <meta name="twitter:title" property="og:title" itemprop="name" content="Hữu Đại - Blog specialize on equipment and solutions on technology">
    <meta name="twitter:description" property="og:description" itemprop="description" content="Where Developers Learn, Share experiences on programing and also place that provide equipment and solutions on technology.">
    <title>Thiết bị và giải pháp công nghệ Hữu Đại</title>
    <link rel="shortcut icon" href="{{ asset('public/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('public/css/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/critical-path.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/carousel.css') }}" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <script src="{{ asset('public/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('public/js/bootstrap/bootstrap.min.js') }}"></script>
</head>
<body class="loading">
    <div class="mk-body-loader-overlay page-preloader" style="background-color:#ffffff;">
        <img alt="Thiết bị và giải pháp công nghệ Hữu Đại" class="preloader-logo" src="public/img/logo.png" width="600" />
        <div class="preloader-preview-area">
            <div class="ball-pulse">
                <div style="background-color: #0a0a0a"></div>
                <div style="background-color: #0a0a0a"></div>
                <div style="background-color: #0a0a0a"></div>
            </div>
        </div>
    </div>
    <div class="background-layer-holder">
        <div class="background-layer">
            <div class="mk-color-layer"></div>
        </div>
    </div>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel fixed-top bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}">Trang chủ <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">Hoạt động</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">Đối tác</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}/san-pham">Cửa hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">Đăng nhập</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <!-- FOOTER -->
        <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>© 2017-2019 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
        </footer>
    </div>
    <script type="text/javascript">
        $(function() {
            $('.mk-body-loader-overlay').fadeOut(500, "easeInOutExpo", function () {
                $("body").removeClass("loading")
            });
        });
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137016557-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-137016557-1');
    </script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({
              google_ad_client: "ca-pub-6072812384391707",
              enable_page_level_ads: true
         });
    </script>

</body>
</html>
