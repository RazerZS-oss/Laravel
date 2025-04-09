<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Aplikasi Klinik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 60px;
        }
        .navbar {
            background-color: #198754;
        }
        .navbar-brand, .nav-link, .navbar-nav .nav-link.active {
            color: #fff !important;
        }
        footer {
            margin-top: 60px;
            padding: 20px 0;
            background-color: #f8f9fa;
            text-align: center;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Klinik Sehat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/dashboard">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pasien">Data Pasien</a></li>
                    <li class="nav-item"><a class="nav-link" href="/dokter">Data Dokter</a></li>
                    <li class="nav-item"><a class="nav-link" href="/periksa">Pemeriksaan</a></li>
                    <li class="nav-item"><a class="nav-link" href="/detail_periksa">laporan Pasien</a></li>
                    <li class="nav-item"><a class="nav-link" href="/rekap">Rekap</a></li>
                    <li class="nav-item"><a class="nav-link" href="/laporan">Laporan</a></li>
                    <li class="nav-item"><a class="nav-link" href="/tentang">Tentang</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} Klinik Sehat. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
