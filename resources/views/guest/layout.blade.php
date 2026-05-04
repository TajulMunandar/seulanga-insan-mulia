<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Yayasan Seulanga Insan Mulia - Organisasi yang berkomitmen untuk memberikan solusi inovatif dan berkelanjutan dalam bidang teknologi dan pengembangan masyarakat.">
    <meta name="keywords" content="yayasan, seulanga, insan mulia, teknologi, masyarakat, pengembangan">
    <meta name="author" content="Yayasan Seulanga Insan Mulia">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Yayasan Seulanga Insan Mulia">
    <meta property="og:description" content="Organisasi yang berkomitmen untuk memberikan solusi inovatif dan berkelanjutan dalam bidang teknologi dan pengembangan masyarakat.">
    <meta property="og:image" content="{{ asset('assets/img/logo.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Yayasan Seulanga Insan Mulia">
    <meta property="twitter:description" content="Organisasi yang berkomitmen untuk memberikan solusi inovatif dan berkelanjutan dalam bidang teknologi dan pengembangan masyarakat.">
    <meta property="twitter:image" content="{{ asset('assets/img/logo.png') }}">

    <title>@yield('title', 'Yayasan Seulanga Insan Mulia')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @stack('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" width="40" height="40" class="me-2">
                <span class="fw-bold text-primary">Seulanga Insan Mulia</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('structure') ? 'active' : '' }}" href="{{ route('structure') }}">Struktur Organisasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('programs') ? 'active' : '' }}" href="{{ route('programs') }}">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('news') ? 'active' : '' }}" href="{{ route('news') }}">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}" href="{{ route('gallery') }}">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-light py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" width="50" height="50" class="me-3">
                        <h5 class="mb-0">Seulanga Insan Mulia</h5>
                    </div>
                    <p class="mb-3">Organisasi yang berkomitmen untuk memberikan solusi inovatif dan berkelanjutan dalam bidang teknologi dan pengembangan masyarakat.</p>
                    <div class="social-links">
                        <a href="#" class="text-light me-3"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-light me-3"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-light me-3"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-light me-3"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 mb-4">
                    <h6 class="mb-3">Menu</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ route('home') }}" class="text-light text-decoration-none">Beranda</a></li>
                        <li class="mb-2"><a href="{{ route('about') }}" class="text-light text-decoration-none">Tentang Kami</a></li>
                        <li class="mb-2"><a href="{{ route('programs') }}" class="text-light text-decoration-none">Program</a></li>
                        <li class="mb-2"><a href="{{ route('news') }}" class="text-light text-decoration-none">Berita</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-4 mb-4">
                    <h6 class="mb-3">Program</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Pendidikan</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Kesehatan</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Lingkungan</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Teknologi</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-4 mb-4">
                    <h6 class="mb-3">Kontak</h6>
                    <div class="contact-info">
                        <p class="mb-2"><i class="bi bi-geo-alt me-2"></i>Jl. Contoh No. 123, Jakarta</p>
                        <p class="mb-2"><i class="bi bi-telephone me-2"></i>+62 21 1234 5678</p>
                        <p class="mb-2"><i class="bi bi-envelope me-2"></i>info@seulanga.org</p>
                        <p class="mb-0"><i class="bi bi-clock me-2"></i>Sen - Jum: 08:00 - 17:00</p>
                    </div>
                </div>
            </div>

            <hr class="my-4">

            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2024 Yayasan Seulanga Insan Mulia. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm">Login Admin</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('scripts')
</body>

</html>
