<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gymyo</title>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/slicknav.css">
    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/css/animated-headline.css">
    <link rel="stylesheet" href="/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/css/themify-icons.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/style.css">

    <style type="text/css">
        #map {
            margin: auto;
            height: 400px;
            width: 93%;
        }
    </style>
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Gymyo
            const paris = { lat: 48.86835780785306, lng: 2.3505001450936724 };
            // The map, centered at Gymyo
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 16,
                center: paris,
            });
            // The marker, positioned at Gymyo
            const marker = new google.maps.Marker({
                position: paris,
                map: map,
            });
        }
    </script>
</head>
<body>
    @include ('header')
    @yield ('content')
    @include ('footer')

    <!-- Jquery, Popper, Bootstrap -->
    <script src="/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <!-- Jquery Mobile Menu -->
    <script src="/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/slick.min.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="/js/wow.min.js"></script>
    <script src="/js/animated.headline.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="/js/plugins.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>
