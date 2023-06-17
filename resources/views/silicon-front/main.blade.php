<!DOCTYPE html>
<html lang="es" data-bs-theme="light">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Eduport - LMS, Education and Course Theme</title>

    <!-- Meta Tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="jademlearning.com">
    <meta name="description" content="jademlearning- LMS, Education and Course Theme">

    <!-- Dark mode -->
    <script>
        const storedTheme = localStorage.getItem('theme')

        const getPreferredTheme = () => {
            if (storedTheme) {
                return storedTheme
            }
            return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
        }

        const setTheme = function(theme) {
            if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.setAttribute('data-bs-theme', 'dark')
            } else {
                document.documentElement.setAttribute('data-bs-theme', theme)
            }
        }

        setTheme(getPreferredTheme())

        window.addEventListener('DOMContentLoaded', () => {
            var el = document.querySelector('.theme-icon-active');
            if (el != 'undefined' && el != null) {
                const showActiveTheme = theme => {
                    const activeThemeIcon = document.querySelector('.theme-icon-active use')
                    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
                    const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

                    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                        element.classList.remove('active')
                    })

                    btnToActive.classList.add('active')
                    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
                }

                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                    if (storedTheme !== 'light' || storedTheme !== 'dark') {
                        setTheme(getPreferredTheme())
                    }
                })

                showActiveTheme(getPreferredTheme())

                document.querySelectorAll('[data-bs-theme-value]')
                    .forEach(toggle => {
                        toggle.addEventListener('click', () => {
                            const theme = toggle.getAttribute('data-bs-theme-value')
                            localStorage.setItem('theme', theme)
                            setTheme(theme)
                            showActiveTheme(theme)
                        })
                    })

            }
        })
    </script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ env('APP_URL', 'http://localhost') }}/silicon-front/assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link rel="stylesheet" href="./silicon-front/silicon/css2.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="./silicon-front/silicon/all.min.css">
    <link rel="stylesheet" type="text/css" href="./silicon-front/silicon/bootstrap-icons.css">

    @if (Route::currentRouteName() == 'index')
        <link rel="stylesheet" type="text/css" href="./silicon-front/silicon/tiny-slider.css">
        <link rel="stylesheet" type="text/css" href="./silicon-front/silicon/glightbox.css">
    @endif

    @if (in_array(request()->route()->getName(), ['mycursos', 'cursos', 'carrito']))
        <link rel="stylesheet" type="text/css" href="./silicon-front/silicon/choices.min.css">
    @endif

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="./silicon-front/silicon/style.css">

    <style></style>
    @php
        Cart::setGlobalTax(0);
    @endphp
</head>

<body>

    <!-- Header START -->
    @include('silicon-front.partes.header')
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->

    @yield('main-content')

    <!-- **************** MAIN CONTENT END **************** -->

    <!-- =======================
    Footer START -->
    @include('silicon-front.partes.footer')
    <!-- =======================
    Footer END -->

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

    @if (in_array(request()->route()->getName(), ['mycursos', 'cursos', 'carrito']))
        <script src="./silicon-front/silicon/choices.min.js"></script>
    @endif

    <!-- Template Functions -->
    <script src="./silicon-front/silicon/functions.js"></script>


</body>

</html>
