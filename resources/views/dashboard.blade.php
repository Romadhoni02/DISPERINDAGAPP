<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Disperindag</title>
</head>
<body>
    <h1>Selamat Datang di Dashboard</h1>
    <p>Anda berhasil login!</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>