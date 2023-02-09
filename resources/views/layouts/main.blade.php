<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title>fake store API</title>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home.index') }}"><img src="{{asset('images/logo.png')}}" alt="Laravel Fake Store API" width="50" height="50">
            </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('show.docs') }}">Docs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://github.com/Alex-Prokhorenko/laravel-mysql-store">GitHub</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Sign in</a>
                    </li>
                @can('view', auth()->user())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Sign up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.product.index') }}">Admin Panel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                @endcan
            </ul>
        </div>
    </div>
</nav>
<main>
    @yield('content')
</main>
</body>
</html>


