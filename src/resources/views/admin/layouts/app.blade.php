<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>管理画面</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    @yield('css')
    </head>
<body>
    <header class="header">
    <div class="header__inner">
        <div class="header-utilities">
             <a class="header__logo" href="/">
             FashionablyLate
            </a>
            <nav>
                <ul class="header-nav">
                    <li class="header-nav__item">
                        <a class="header-nav__link" href="/login/login">ログイン</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<main>
    @yield('content')
</main>
</body>

</html>