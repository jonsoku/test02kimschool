<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/ex2.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/1.css') }}" />
    <script src="{{ asset('js/subjects.js') }}" defer></script>
    <script src="{{ asset('js/mainSlide.js') }}" defer></script>
</head>
<body>
    <div class="wrapper">
        <div class="auth">
            <ul>
                <!-- Authentication Links -->
                @guest
                    <li>
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">{{ __('JOIN') }}</a>
                        </li>
                    @endif
                @else
                    <li>
                        <a>
                            <span>{{ Auth::user()->name }}</span>님 환영합니다 !
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="{{route('abouts.index')}}">About</a></li>
                <li><a href="/subjects/java">Subject</a></li>
                <li><a href="/notices">Notice</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <!--Navigation End-->
        <div class="wrapper-title">
            @yield('wrapper-title')
        </div>
        @yield('wrapper')
        <!--footer-->
        <footer>
            <p>KIMSCHOOL &copy; 2019</p>
        </footer>

    </div>
    <!--Wrapper End-->

</body>
</html>
