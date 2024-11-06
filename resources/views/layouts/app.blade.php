<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'DisperindagApp')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('dashboard') }}">Dashboard</a>
        <a class="navbar-brand" href="{{ route('market.index') }}">Market</a>
        <a class="navbar-brand" href="{{ route('news.index') }}">News</a>
        <a class="navbar-brand" href="{{ route('contact.index') }}">Contact</a>
        <form action="{{ route('logout') }}" method="POST" class="ml-auto">
            @csrf
            <button class="btn btn-danger" type="submit">Logout</button>
        </form>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
