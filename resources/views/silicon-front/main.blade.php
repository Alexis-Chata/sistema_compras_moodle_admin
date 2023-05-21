<!DOCTYPE html>
<!-- saved from url=(0030)https://eduport.webestica.com/ -->
<html lang="es" data-theme="light">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Eduport - LMS, Education and Course Theme</title>

    <!-- Meta Tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="jademlearning.com">
    <meta name="description" content="Eduport- LMS, Education and Course Theme">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ env('APP_URL', 'http://localhost') }}/silicon-front/assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link rel="stylesheet" href="./silicon-front/silicon/css2">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="./silicon-front/silicon/all.min.css">
    <link rel="stylesheet" type="text/css" href="./silicon-front/silicon/bootstrap-icons.css">

    @if (Route::currentRouteName() == 'index')
        <link rel="stylesheet" type="text/css" href="./silicon-front/silicon/tiny-slider.css">
        <link rel="stylesheet" type="text/css" href="./silicon-front/silicon/glightbox.css">
    @endif

    @if (in_array(request()->route()->getName(), ['cursos', 'carrito']))
        <link rel="stylesheet" type="text/css" href="./silicon-front/silicon/choices.min.css">
    @endif

    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="./silicon-front/silicon/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="./silicon-front/silicon/js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-7N7LGGGWT1');
    </script>

    @livewireStyles
    <style></style>
    @php
        Cart::setGlobalTax(0);
    @endphp
</head>

<body cz-shortcut-listen="true">

    <!-- Header START -->
    @include('silicon-front.partes.header')
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->

    @yield('main-content')

    <!-- **************** MAIN CONTENT END **************** -->

    <!-- ======================= Footer START -->
    @include('silicon-front.partes.footer')
    <!-- ======================= Footer END -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i>
    </div>

    <!-- Bootstrap JS -->
    <script src="./silicon-front/silicon/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    @if (Route::currentRouteName() == 'index')
        <script src="./silicon-front/silicon/tiny-slider.js"></script>
        <script src="./silicon-front/silicon/glightbox.js"></script>
        <script src="./silicon-front/silicon/purecounter_vanilla.js"></script>
    @endif

    @if (in_array(request()->route()->getName(), ['cursos', 'carrito']))
        <script src="./silicon-front/silicon/choices.min.js"></script>
    @endif

    <!-- Template Functions -->
    <script src="./silicon-front/silicon/functions.js"></script>

    @livewireScripts

</body>

</html>
