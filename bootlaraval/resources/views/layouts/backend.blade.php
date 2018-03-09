<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicons && Device Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="ico/favicon-16x16.png">
    <link rel="manifest" href="ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header id="header" class="pt-5 mt-2">
        <nav class="navbar navbar-expand-md bg-bright fixed-top navbar-light border-bottom">
            <div class="container">
                <a class="navbar-brand " href="{{ url('/') }}">
                    <i class="fas fa-leaf text-success"></i> {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarToggleContent">
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                        <li>
                            <a class="nav-link btn btn-outline-success mx-1" href="{{ route('login') }}">
                                <i class="fas fa-user-plus"></i>{{ __('Signin') }}</a>
                        </li>
                        <li>
                            <a class="nav-link btn btn-outline-primary" href="{{ route('register') }}">
                                <i class="fas fa-sign-in-alt"></i>{{ __('Signup') }}</a>
                        </li>
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                                <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i>{{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>


    <footer id="footer">
        <div class="container border-top py-3 mt-5">
            <div class="row justify-content-between">
                <div class="col-md-3">
                    <a class="navbar-brand " href="#">
                        <i class="fas fa-leaf text-muted"></i>
                        <span class="text-muted">{{ config('app.name', 'Laravel') }}</span>
                    </a>
                    <small class="blockquote-footer">&copy; 2018 MetaActs Inc.</small>
                </div>
                <div class="col-md-3">
                    <h6>Company</h6>
                    <ul class="list-unstyled">
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="about.html">Terms of Service</a>
                        </li>
                        <li>
                            <a href="about.html">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="about.html">Trust &amp; Safety</a>
                        </li>
                        <li>
                            <a href="about.html">Careers</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6>Support</h6>
                    <ul class="list-unstyled">
                        <li>
                            <a href="about.html">Contact Support</a>
                        </li>
                        <li>
                            <a href="about.html">User Handbook</a>
                        </li>
                        <li>
                            <a href="about.html">Provider Handbook</a>
                        </li>
                        <li>
                            <a href="about.html">How to Guide</a>
                        </li>
                        <li>
                            <a href="about.html">Blog</a>
                        </li>
                        <li>
                            <a href="about.html">Forum</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6>Explore</h6>
                    <ul class="list-unstyled">
                        <li>
                            <a href="about.html">Experts by Skill</a>
                        </li>
                        <li>
                            <a href="about.html">Topics</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>