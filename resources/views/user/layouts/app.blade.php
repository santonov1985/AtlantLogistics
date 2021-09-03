<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->

<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->

<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->

<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <script type="text/javascript">
        var _LANG_ = "ru",
            ajaxFile = "/cms/../ajax.php";
    </script>

    <script type="text/javascript">
        var _NOWORD_ = "",
            _TOOLONG_ = "",
            _SEARCHWORD_ = "";
    </script>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Atlant Logistics Company - транспортно-экспедиторская компания в Алматы</title>
    <meta name="keywords" content="Транспортно-экспедиторская компания в Алматы, организация перевозок по всей территории Казахстана, доставка грузов по территории Республики Казахстан, организация международных автомобильных перевозок по Казахстану, оформление товаросопроводительных документов, авиаперевозки по Казахстану, складирование грузов по Казахстану, организация перевозок авиатранспортом по Казахстану, услуги автоперевозок по Казахстану">
    <meta name="description" content="ТОО «Atlant Logistics Company» активно развивающаяся, транспортно-экспедиторская компания.">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <link href="{{ asset('/css/ui.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('/css/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/easydropdown.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/pagination.css') }}">
    <meta name="yandex-verification" content="0aa28e7922ba186e"/>
    <meta name="google-site-verification" content="acVHCzw-oODxPptLm3WCkq1_9ygwH5yW5JlfscEgCnc"/>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            },
                i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-93198804-36', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body data-lang="ru">

    <div style="position: absolute;">

    </div>

    <!--[if lt IE 9]>

    <p class="browsehappy">Вы используете очень<strong> устаревший</strong> браузер. Пожалуйста <a href="http://browsehappy.com/">обновите Ваш браузер</a> и будет вам счастье:)</p>

    <![endif]-->
    <header>
        @include('user.layouts.header')
    </header>

<div class="main">
    <!-- main content -->
    @yield('content')

{{--    <!-- main news -->--}}
{{--    <div class="banner-down">--}}
{{--        <!-- banner down -->--}}
{{--        <img src="{{ asset('/img/index/img-7.jpg') }}" alt="img-7">--}}
{{--    </div>--}}
{{--    <!-- banner down -->--}}

    <div class="phrase__block">
        @include('user.layouts.phrase_block')
    </div>

</div>
<!-- main content -->

<a href="#test" class="arrow-up"></a>

<footer>
   @include('user.layouts.footer')
</footer>

<script type="text/javascript" src="{{ asset('/js/validate.js') }}"></script>
<script type="text/javascript" src='{{ asset('/js/api.js') }}'></script>
<script type="text/javascript" src="{{ asset('/js/jquery-1.12.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/ui.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/print.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.placeholder.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.fancybox.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.easydropdown.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/init.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.js') }}"></script>
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script type="text/javascript" src="{{ asset('/js/jquery.mousewheel.pack.js') }}"></script>
<script type="text/javascript" src="{{asset('/js/slick.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.maskedinput.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/common.js') }}"></script>

</body>

</html>
