<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="canonical" href="/">
    <link rel="alternate" href="/" hreflang="vi">
    <link rel="alternate" href="/vi/" hreflang="en-ENG">
    <link rel="alternate" href="/vie/" hreflang="vie-VIE">
    <title>@yield('page_name')</title>
    <meta name="keywords" content="@yield('key_words')">
    <meta name="description" content="@yield('description')">
    <meta property="og:site_name" content="">
    <meta property="og:type" content="website">
    <meta name="description" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">

    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="dns-prefetch" href="/">
    <link rel="icon" href="{{ asset('home/images/logo-favicon.png') }}" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="{{ asset('home/js/jquery-2.1.4.min.js') }}" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('home/css/main-64.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/main-3.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/w_ajbo.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/style.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="5RicnuKvgTHp7bvf5flvv06FleVsWq3wmbJzdCJ_bVs" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WVB1WK898Z"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-WVB1WK898Z');
    </script>
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
        $(document).ready(function () {
            AOS.init();
        })
    </script>
    <div id="google_translate_element"></div>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript"
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        var flags = document.getElementsByClassName('flag_link');
        Array.prototype.forEach.call(flags, function (e) {
            e.addEventListener('click', function () {
                var lang = e.getAttribute('data-lang');
                var languageSelect = document.querySelector("select.goog-te-combo");
                languageSelect.value = lang;
                languageSelect.dispatchEvent(new Event("change"));
            });
        });
    </script>

    <div id="sp2022" class="hidden-xs hidden-sm">
        <ul>
            <li>
                <p class="ccall d-flex align-items-center " data-toggle="modal" data-target="#flipFlop">
                    <img width="30" height="30" src="{{ asset('home/images/telephone.png') }}" alt="1900 0095"><span
                        class="d-flex flex-column "><span>Gọi
                            miễn phí</span><span class="cl_yellow animated infinite tada">1900 0095</span></span>
                </p>
            </li>
            <li><a target="_blank" href="https://www.facebook.com/osakar.vn" rel="nofollow"
                    class="cfb d-flex align-items-center">
                    <img width="30" height="30" src="{{ asset('home/images/facebook.png') }}" alt="Chat FB"><span>Chat
                        FB</span>
                </a></li>
            <li><a target="_blank" href="https://zalo.me/3413590899111168672" rel="nofollow"
                    class="czalo d-flex align-items-center">
                    <img width="30" height="30" src="{{ asset('home/images/zalo-icon.png') }}"
                        alt="Chat Zalo"><span>Chat Zalo</span>
                </a></li>
            <li><a target="_blank" href="/list-store/mien-bac" rel="nofollow" class="cmap d-flex align-items-center">
                    <img width="30" height="30" src="{{ asset('home/images/google-maps.png') }}"
                        alt="Chỉ đường"><span>Chỉ đường</span>
                </a></li>
        </ul>
    </div>

    <ul class="list-footer-fixed hidden-md hidden-lg">
        <li>
            <p rel="nofollow" class="show-popup-call-center ccall d-flex align-items-center" data-toggle="modal"
                data-target="#flipFlop">
                <strong class="animated infinite tada delay-2s "
                    style="color: #d20d14;line-height: 30px">1900 0095</strong>
                <span>Gọi miễn phí</span>
            </p>
        </li>
        <li>
            <a target="_blank" rel="nofollow" class="cfb" href="https://www.facebook.com/osakar.vn">
                <img width="30" height="30"
                    src="{{ asset('home/images/icon-mobile-fb.png') }}"
                    alt="message"></noscript>
                <span>Nhắn tin</span>
            </a>
        </li>
        <li>
            <a target="_blank" rel="nofollow" class="czalo" href="https://zalo.me/3413590899111168672">
                <img width="30" height="30"
                    src="{{ asset('home/images/zalo-icon.png') }}"
                    alt="zalo-chat">
                <span>Chat Zalo</span>
            </a>
        </li>
        <li>
            <a href="/list-store/mien-bac" class="cmap show-popup-support-local">
                <img width="30" height="30"
                    src="{{ asset('home/images/google-maps.png') }}"
                    alt="chi-duong">
                <span>Chỉ đường</span>
            </a>
        </li>
    </ul>

</body>

</html>