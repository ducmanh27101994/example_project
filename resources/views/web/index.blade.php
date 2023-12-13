<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="canonical" href="/">
    <link rel="alternate" href="/" hreflang="vi">
    <link rel="alternate" href="/vi/" hreflang="en-ENG">
    <link rel="alternate" href="/vie/" hreflang="vie-VIE">
    <title>Gogoro Global</title>
    <meta property="og:site_name" content="">
    <meta property="og:type" content="website">
    <meta name="description" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">

    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="dns-prefetch" href="/">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;600&display=swap" rel="stylesheet">
    <script src="{{ asset('home/js/jquery-3.6.0.min.js') }}" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="{{ asset('home/css/main-64.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/main-3.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/w_ajbo.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/style.css') }}">

</head>

<body>
    @if(request()->is('/'))
    <header id="header" class="header sticky-jump">
        @include('/web/skinpart/topbar')
        @include('/web/skinpart/modal')
    </header>
    @endif
    @include('/web/skinpart/menu')
    @yield('content')
    @include('/web/skinpart/footer')

    <link rel="stylesheet" href="{{ asset('home/css/aos.css') }}">
    <script src="{{ asset('home/js/aos.js') }}"></script>


    <script src="{{ asset('home/js/main-93e8e59e093022fa1d83.digested.js') }}"></script>
    <script defer src="{{ asset('home/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('home/js/counterup.js') }}"></script>
    <script src="{{ asset('home/js/script.js') }}"></script>
    <script>
        $(document).ready(function() {
            AOS.init();
        })
    </script>
    <div id="google_translate_element"></div>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        var flags = document.getElementsByClassName('flag_link');
        Array.prototype.forEach.call(flags, function(e) {
            e.addEventListener('click', function() {
                var lang = e.getAttribute('data-lang');
                var languageSelect = document.querySelector("select.goog-te-combo");
                languageSelect.value = lang;
                languageSelect.dispatchEvent(new Event("change"));
                var languageSelectShow = document.querySelector(".name_language");
                languageSelectShow.innerHTML = e.text;
                document.querySelector(".language_choose").style.display = "none"
            });
        });
    </script>
</body>

</html>