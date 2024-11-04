<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Link ke file CSS -->
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="path/to/logo.jpg" alt="Logo Disperindag" />
                <span>DISPERINDAG</span>
            </div>
            <ul>
                <li><a href="{{ route('dashboard') }}">Home</a></li>
                <li><a href="{{ url('/market') }}">Pasar</a></li>
                <li><a href="{{ url('/news') }}">Informasi</a></li>
                <li><a href="{{ url('/contact') }}">Hubungi Kami</a></li>
                <li><a href="{{ route('logout') }}" 
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a></li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </nav>
    </header>

    <main>
        <section class="welcome">
            <h2>Selamat datang di Dashboard</h2>
            <p>Informasi seputar pasar dan kegiatan di Disperindag.</p>
        </section>
        
        <!-- Carousel atau Konten Informasi -->
        <section class="content-cards">
            <div class="card">
                <h3>Kasus Darurat</h3>
                <p>Kami siap mendukung usaha Anda dengan cepat...</p>
                <a href="#">Pelajari Lebih Lanjut</a>
            </div>
            <div class="card">
                <h3>Jadwal Karyawan</h3>
                <p>Dengan manajemen jadwal yang efektif...</p>
                <a href="#">Pelajari Lebih Lanjut</a>
            </div>
            <div class="card">
                <h3>Jam Buka</h3>
                <p>Senin - Kamis: 07.00 - 15.00, Jum'at: 07.00 - 13.00</p>
                <a href="#">Pelajari Lebih Lanjut</a>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} DISPERINDAG. All rights reserved.</p>
    </footer>
</body>
</html>
