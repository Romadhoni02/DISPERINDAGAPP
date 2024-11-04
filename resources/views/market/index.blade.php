<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pasar</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Daftar Pasar</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Pasar</th>
                    <th>Deskripsi</th>
                    <th>Lokasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($markets as $market)
                    <tr>
                        <td>{{ $market->name }}</td>
                        <td>{{ $market->description }}</td>
                        <td>{{ $market->location }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
