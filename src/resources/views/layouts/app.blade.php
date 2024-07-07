<!DOCTYPEhtml>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reseログイン画面</title>
</head>

<body>
    <header>
        <form action="/menu1" method="get"></form>
        <h1>Rese</h1>
        @yield('search')
    </header>
    <main>
        @yield('content')
    </main>
</body>

</html>