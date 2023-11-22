<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <a href="/" class="header__logo">Atte</a>
                <nav>
                    <ul class="header-nav">
                        @if (Auth::check())
                        <li class="header-nav__item">
                            <a href="/" class="header-nav__link">
                                ホーム
                            </a>
                        </li>
                        <li class="header-nav__item">
                            <a href="/attendance" class="header-nav__link">
                                日付一覧
                            </a>
                        </li>
                        <li class="header-nav_item">
                            <form class="form" action="/logout" method="post">
                                @csrf
                                <button class="header-nav__button">ログアウト</button>
                            </form>
                        </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="footer__inner">
            <p class="footer__inner-logo">
                Atte,inc.
            </p>
        </div>
    </footer>
    <script>
        'use strict';
        const now = new Date();
        const year = now.getFullYear();
        const month = now.getMonth()+1;
        const date = now.getDate();

        const today = `${year}-${month}-${date}`;
        document.getElementById('today').textContent = today;
    </script>
</body>
</html>