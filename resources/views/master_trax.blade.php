<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cariber | Resume Building Platfrom</title>

    

    <link href="images/favicon.ico" rel="icon">

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/jquery.fancybox.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/tooltipster.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/cubeportfolio.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/revolution/navigation.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/revolution/settings.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
</head>
<body>
<!--PreLoader-->
<div class="loader">
    <div class="loader-inner">
        <div class="cssload-loader"></div>
    </div>
</div>
<!--PreLoader Ends-->


@yield('content')
@include('partials._contact')
@include('partials._footer')

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="{{ URL::asset('js/trax_js/jquery-3.4.1.min.js') }}"></script>
<!--Bootstrap Core-->
<script type="text/javascript" src="{{ URL::asset('js/trax_js/propper.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/trax_js/bootstrap.min.js') }}"></script>
<!--to view items on reach-->
<script type="text/javascript" src="{{ URL::asset('js/trax_js/jquery.appear.js') }}"></script>
<!--Owl Slider-->
<script type="text/javascript" src="{{ URL::asset('js/trax_js/owl.carousel.min.js') }}"></script>
<!--number counters-->
<script type="text/javascript" src="{{ URL::asset('js/trax_js/jquery-countTo.js') }}"></script>
<!--Parallax Background-->
<script type="text/javascript" src="{{ URL::asset('js/trax_js/parallaxie.js') }}"></script>
<!--Cubefolio Gallery-->
<script type="text/javascript" src="{{ URL::asset('js/trax_js/jquery.cubeportfolio.min.js') }}"></script>
<!--Fancybox js-->
<script type="text/javascript" src="{{ URL::asset('js/trax_js/jquery.fancybox.min.js') }}"></script>
<!--tooltip js-->
<script type="text/javascript" src="{{ URL::asset('js/trax_js/tooltipster.min.js') }}"></script>
<!--wow js-->
<script type="text/javascript" src="{{ URL::asset('js/trax_js/wow.js') }}"></script>
<!--Revolution SLider-->
<script type="text/javascript" src="{{ URL::asset('js/trax_js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/trax_js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
<script type="text/javascript" src="{{ URL::asset('js/trax_js/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/trax_js/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/trax_js/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/trax_js/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/trax_js/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/trax_js/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/trax_js/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/trax_js/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/trax_js/revolution.extension.video.min.js') }}"></script>
<!--custom functions and script-->
<script type="text/javascript" src="{{ URL::asset('js/trax_js/functions.js') }}"></script>
</body>
</html>