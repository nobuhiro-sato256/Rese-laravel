<!DOCTYPEhtml>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/common.css')}}">
    @yield('css')
    <title>Rese</title>
</head>

<body>
    <header>
        <div class="header__main">
            <a class="icon" href="#modal">
                <div class="icon__mark">
                    <div class="icon__border"></div>
                </div>
                <span class="icon__title">Rese</span>
            </a>
            @yield('search')
        </div>
    </header>
    <main>
        @yield('content')
        <div class="modal" id="modal">
        @if(Auth::check())
            <div class="modal__inner" >
                <div class="modal__content">
                    <ul>
                        <li>
                            <a href="{{ route('index')}}">Home</a>
                        </li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button>Logout</button>
                            </form>
                        </li>
                        <li>
                            <a href="{{ route('my_page')}}">Mypage</a>
                        </li>
                    </ul>
                </div>
            </div>
            @else
            <div class="modal__inner" >
                <div class="modal__content">
                    <ul>
                        <li>
                            <a href="{{ route('index')}}">Home</a>
                        </li>
                        <li>
                            <form action="/register" method="get">
                                @csrf
                                <button>Registration</button>
                            </form>
                        </li>
                        <li>
                            <form action="/login" method="get">
                                @csrf
                                <button>Login</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            @endif
            <a href="#" class="modal__close-btn">✕</a>
        </div>
    </main>
</body>

</html>