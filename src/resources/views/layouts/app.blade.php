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
        @if(Auth::check())
            <a href="#auth">Rese</a>
        @else
            <a href="#guest">Rese</a>
        @endif
    </header>
    <main>
        @yield('content')
        @if(Auth::check())
            <div class="modal" id="auth">
                <div class="modal__inner">
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
                            <a href="{{ route('my_page',['id' => Auth::id()])}}">Mypage</a>
                        </li>
                    </ul>
                </div>
            </div>
            @else
            <div class="modal" id="guest">
                <div class="modal__inner">
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
        </div>
    </main>
</body>

</html>