<!DOCTYPE html>
<html lang="es">

<head>
    <title>Eduport - LMS, Education and Course Theme</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Eduport- LMS, Education and Course Theme">

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('silicon-front/silicon/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('silicon-front/silicon/bootstrap-icons.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('silicon-front/silicon/style.css') }}">

</head>

<body>

    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        <section class="p-0 d-flex align-items-center position-relative overflow-hidden">

            <div class="container-fluid">
                <div class="row">
                    <!-- left -->
                    <div
                        class="col-12 col-lg-6 d-md-flex align-items-center justify-content-center bg-primary bg-opacity-10 vh-lg-100">
                        <div class="p-3 p-lg-5">
                            <!-- Title -->
                            <div class="text-center">
                                <h2 class="fw-bold">Bienvenido a nuestra comunidad más grande</h2>
                                <p class="mb-0 h6 fw-light">¡Aprendamos algo nuevo hoy!</p>
                            </div>
                            <!-- SVG Image -->
                            <img src="{{ asset('silicon-front/assets/images/element/02.svg') }}" class="mt-5"
                                alt="">
                            <!-- Info -->
                            <div class="d-sm-flex mt-5 align-items-center justify-content-center">
                                <!-- Avatar group -->
                                <ul class="avatar-group mb-2 mb-sm-0">
                                    <li class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle"
                                            src="{{ asset('silicon-front/assets/images/avatar/01.jpg') }}"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle"
                                            src="{{ asset('silicon-front/assets/images/avatar/02.jpg') }}"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle"
                                            src="{{ asset('silicon-front/assets/images/avatar/03.jpg') }}"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle"
                                            src="{{ asset('silicon-front/assets/images/avatar/04.jpg') }}"
                                            alt="avatar">
                                    </li>
                                </ul>
                                <!-- Content -->
                                <p class="mb-0 h6 fw-light ms-0 ms-sm-3">4k+ estudiantes se unieron a nosotros, ahora es
                                    tu turno.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right -->
                    <div class="col-12 col-lg-6 m-auto">
                        <div class="row my-5">
                            <div class="col-sm-10 col-xl-8 m-auto">
                                <!-- Title -->
                                <span class="mb-0 fs-1">👋</span>
                                <h1 class="fs-2">¡Inicia sesión en <a href="{{ route('index') }}">Eduport!</a></h1>
                                <p class="lead mb-4">¡Me alegro de verte! Inicie sesión con su cuenta.</p>

                                <!-- Form START -->
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <!-- Email -->
                                    <div class="mb-4">
                                        <label for="exampleInputEmail1" class="form-label">Email *</label>
                                        <div class="input-group input-group-lg">
                                            <span
                                                class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                    class="bi bi-envelope-fill"></i></span>
                                            <input type="email" name="email"
                                                class="form-control border-0 bg-light rounded-end ps-1"
                                                placeholder="E-mail" id="exampleInputEmail1" required autofocus autocomplete="username">
                                        </div>
                                    </div>
                                    <!-- Password -->
                                    <div class="mb-4">
                                        <label for="inputPassword5" class="form-label">Contraseña *</label>
                                        <div class="input-group input-group-lg">
                                            <span
                                                class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                    class="fas fa-lock"></i></span>
                                            <input type="password"
                                                class="form-control border-0 bg-light rounded-end ps-1"
                                                placeholder="password" id="inputPassword5" name="password" required autocomplete="current-password" />
                                        </div>
                                        <div id="passwordHelpBlock" class="form-text">
                                            Su contraseña debe tener al menos 8 caracteres
                                        </div>
                                    </div>
                                    <!-- Check box -->
                                    <div class="mb-4 d-flex justify-content-between mb-4">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                                            <label class="form-check-label" for="exampleCheck1">Recuérdame</label>
                                        </div>
                                        @if (Route::has('password.request'))
                                        <div class="text-primary-hover">
                                            <a href="{{ route('password.request') }}" class="text-secondary">
                                                <u>¿Olvidó su contraseña?</u>
                                            </a>
                                        </div>
                                        @endif
                                    </div>
                                    <!-- Button -->
                                    <div class="align-items-center mt-0">
                                        <div class="d-grid">
                                            <button class="btn btn-primary mb-0" type="submit">Iniciar Sesión</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Form END -->
                                {{--
                                <!-- Social buttons and divider -->
                                <div class="row">
                                    <!-- Divider with text -->
                                    <div class="position-relative my-4">
                                        <hr>
                                        <p
                                            class="small position-absolute top-50 start-50 translate-middle bg-body px-5">
                                            Or</p>
                                    </div>

                                    <!-- Social btn -->
                                    <div class="col-xxl-6 d-grid">
                                        <a href="#" class="btn bg-google mb-2 mb-xxl-0"><i
                                                class="fab fa-fw fa-google text-white me-2"></i>Login with Google</a>
                                    </div>
                                    <!-- Social btn -->
                                    <div class="col-xxl-6 d-grid">
                                        <a href="#" class="btn bg-facebook mb-0"><i
                                                class="fab fa-fw fa-facebook-f me-2"></i>Login with Facebook</a>
                                    </div>
                                </div>
							--}}
                                <!-- Sign up link -->
                                <div class="mt-4 text-center">
                                    <span>¿No tienes una cuenta? <a href="{{ route('register') }}">Regístrese aquí</a></span>
                                </div>
                            </div>
                        </div> <!-- Row END -->
                    </div>
                </div> <!-- Row END -->
            </div>
        </section>
    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i>
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('silicon-front/silicon/bootstrap.bundle.min.js') }}"></script>

    <!-- Template Functions -->
    <script src="{{ asset('silicon-front/silicon/functions.js') }}"></script>

</body>

</html>
