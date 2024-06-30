<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="PHP, LARAVEL, Symfony, Laravel, Css">
    <meta name="author" content="Benji Uribe Ramos">
    <meta name="description" content="Portafolio de Benji Uribe Ramos">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benji Uribe Ramos</title>

    <!-- css -->
    @yield('css')
    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Adsense -->
    {{-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4262096324136426"
     crossorigin="anonymous"></script> --}}
    
</head>
<body style="background-image: url('/assets/img/fondo.jpeg')">
    @include('template._header')
    
    @yield('content')
    @include('template._footer')
    
    <script>
        // const bodycolor = [
        //     '#F2D7D5',
        //     '#FDEDEC',
        //     '#BCAAA4',
        //     '#FFF59D',
        //     '#FFAB91',
        // ]

        // const cambiarColor = (element) => {
        //     let indexcolor = parseInt(Math.random() * (bodycolor.length));
        //     document.querySelector(element).style.background = bodycolor[indexcolor];

        // }
        // cambiarColor('body')

        function isMobile() {
            if (sessionStorage.desktop)
                return false;
            else if (localStorage.mobile)
                return true;
            var mobile = ['iphone', 'ipad', 'android', 'blackberry', 'nokia', 'opera mini', 'windows mobile', 'windows phone', 'iemobile'];
            for (var i in mobile)
                if (navigator.userAgent.toLowerCase().indexOf(mobile[i].toLowerCase()) > 0) return true;
            return false;
        }

    </script>

    @yield('js')

</body>
</html>
