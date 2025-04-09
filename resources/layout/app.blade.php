<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="/dashboard">Klinik App</a>
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
              <li class="nav-item"><a class="nav-link" href="/dashboard">Dashboard</a></li>
              <li class="nav-item"><a class="nav-link" href="/pasien">Pasien</a></li>
              <li class="nav-item"><a class="nav-link" href="/dokter">Dokter</a></li>
              <li class="nav-item"><a class="nav-link" href="/obat">Obat</a></li>
              <li class="nav-item"><a class="nav-link" href="/pemeriksaan">Pemeriksaan</a></li>
              <li class="nav-item"><a class="nav-link" href="/laporan">Laporan</a></li>
              <li class="nav-item"><a class="nav-link" href="/tentang">Tentang</a></li>
            </ul>
          </div>
        </div>
      </nav>      

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
