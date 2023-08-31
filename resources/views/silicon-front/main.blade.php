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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">
    {{-- <link rel="stylesheet" href="{{ asset('silicon-front/silicon/css2.css') }}"> --}}

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('silicon-front/silicon/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('silicon-front/silicon/bootstrap-icons.css') }}">

    @if (Route::currentRouteName() == 'index' or
            in_array(request()->route()->getName(),
                ['curso']))
        <link rel="stylesheet" type="text/css" href="{{ asset('silicon-front/silicon/tiny-slider.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('silicon-front/silicon/glightbox.css') }}">
    @endif

    @if (in_array(request()->route()->getName(),
            ['mycursos', 'cursos', 'curso', 'carrito', 'dashboard', 'historial-pagos', 'checkout']))
        <link rel="stylesheet" type="text/css" href="{{ asset('silicon-front/silicon/choices.min.css') }}">
    @endif

    @if (in_array(request()->route()->getName(),
            ['mycursos', 'dashboard', 'historial-pagos']))
        <link rel="stylesheet" type="text/css" href="{{ asset('silicon-front/assets/vendor/aos/aos.css') }}">
    @endif

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('silicon-front/silicon/style.css') }}">

    <style></style>
    @php
        Cart::instance('carrito')->setGlobalTax(0);
    @endphp

    @auth
        @php
            auth()->user()->createOrGetStripeCustomer();
            cart::instance('carrito')->restore(Auth::user()->id);
            cart::instance('carrito')->store(Auth::user()->id);
        @endphp
    @endauth

    @livewireStyles
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
    <script src="{{ asset('silicon-front/silicon/bootstrap.bundle.min.js') }}"></script>

    <!-- Vendors -->
    @if (Route::currentRouteName() == 'index')
        <script src="{{ asset('silicon-front/silicon/purecounter_vanilla.js') }}"></script>
    @endif

    @if (Route::currentRouteName() == 'index' or
            in_array(request()->route()->getName(),
                ['curso']))
        <script src="{{ asset('silicon-front/silicon/tiny-slider.js') }}"></script>
        <script src="{{ asset('silicon-front/silicon/glightbox.js') }}"></script>
    @endif

    @if (in_array(request()->route()->getName(),
            ['mycursos', 'curso', 'cursos', 'carrito', 'dashboard', 'historial-pagos', 'checkout']))
        <script src="{{ asset('silicon-front/silicon/choices.min.js') }}"></script>
    @endif

    @if (in_array(request()->route()->getName(),
            ['dashboard', 'historial-pagos']))
        <script src="{{ asset('silicon-front/assets/vendor/purecounterjs/dist/purecounter_vanilla.js') }}"></script>
    @endif

    @if (in_array(request()->route()->getName(),
            ['mycursos', 'dashboard', 'historial-pagos']))
        <script src="{{ asset('silicon-front/assets/vendor/aos/aos.js') }}"></script>
    @endif

    <!-- Template Functions -->
    <script src="{{ asset('silicon-front/silicon/functions.js') }}"></script>

    @livewireScripts
    <script defer>
        window.onload = function () {
            Livewire.emitTo('total-carrito', 'actualizar')
            Livewire.emitTo('detalle-carrito', 'actualizar')
        }
    </script>

    @stack('billings')
</body>

</html>

