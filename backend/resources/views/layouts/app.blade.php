<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="top-bar topbar-responsive">
            <div class="top-bar-title">
                <span data-responsive-toggle="topbar-responsive" data-hide-for="medium">
                  <button class="menu-icon" type="button" data-toggle></button>
                </span>
                <a class="topbar-responsive-logo" href="#"><strong>{{ config('app.name', 'Laravel') }}</strong></a>
            </div>
            <div id="topbar-responsive" class="topbar-responsive-links">
                <div class="top-bar-right">
                    <ul class="menu simple vertical medium-horizontal">
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">{{ __('auth.login') }}</a></li>
                            <li><a href="{{ route('register') }}">{{ __('auth.register') }}</a></li>
                        @else
                            <li><a href="#">{{ __('words.home') }}</a></li>
                            <li><a href="#">{{ __('words.proposals') }}</a></li>
                            <li>
                                <button type="button"
                                        class="button hollow topbar-responsive-button"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                >{{ __('auth.logout') }}</button>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(document).foundation();
    </script>
</body>
</html>
