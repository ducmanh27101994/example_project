<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>
        Quản trị website
    </title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/general.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/easy-responsive-tabs.css') }}" />
    <script type="text/javascript" src="{{ asset('js/jquery-1.11.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/ddaccordion.js') }}"></script>
    <script src="{{ asset('js/easyResponsiveTabs.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src={{ url('ckeditor/ckeditor.js') }}></script>
</head>

<body>
    <!-- @include('/template/header') -->
    <div id="wrapper">
        @if (session()->get('employee'))
        @include('/template/sidebar')
        @endif
        @yield('content')
    </div>

</body>

</html>
