@extends('guest.layout')

@section('title', 'Beranda - Yayasan Seulanga Insan Mulia')

@section('content')
<!-- Hero Section -->
<section class="hero-section bg-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">Yayasan Seulanga Insan Mulia</h1>
                <p class="lead mb-4">{{ $hero_content->deskripsi ?? 'Organisasi yang berkomitmen untuk memberikan solusi inovatif dan berkelanjutan dalam bidang teknologi dan pengembangan masyarakat.' }}</p>
                <div class="d-flex gap-3">
                    <a href="{{ route('about') }}" class="btn btn-light btn-lg">Tentang Kami</a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg">Hubungi Kami</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('assets/img/hero-image.jpg') }}" alt="Hero Image" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- Programs Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold">Program Kami</h2>
                <p class="lead text-muted">Berbagai program yang kami jalankan untuk kemajuan masyarakat</p>
            </div>
        </div>

        <div class="row">
            @foreach($programs as $program)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    @if($program->gambar)
                        <img src="{{ asset('storage/' . $program->gambar) }}" class="card-img-top" alt="{{ $program->nama }}" style="height: 200px; object-fit: cover;">
                    @else
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                            <i class="bi bi-image text-muted" style="font-size: 3rem;"></i>
                        </div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $program->nama }}</h5>
                        <p class="card-text">{{ Str::limit($program->deskripsi, 100) }}</p>
                        <a href="{{ route('program.detail', $program->id) }}" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('programs') }}" class="btn btn-outline-primary">Lihat Semua Program</a>
        </div>
    </div>
</section>

<!-- Latest News Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold">Berita Terbaru</h2>
                <p class="lead text-muted">Informasi terkini dari kegiatan dan program kami</p>
            </div>
        </div>

        <div class="row">
            @foreach($latest_news as $news)
            <div class="col-lg-4 mb-4">
                <div class="card h-100 shadow-sm">
                    @if($news->gambar)
                        <img src="{{ asset('storage/' . $news->gambar) }}" class="card-img-top" alt="{{ $news->judul }}" style="height: 200px; object-fit: cover;">
                    @else
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                            <i class="bi bi-newspaper text-muted" style="font-size: 3rem;"></i>
                        </div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $news->judul }}</h5>
                        <p class="card-text">{{ $news->excerpt ?? Str::limit(strip_tags($news->konten), 100) }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">{{ $news->published_at ? $news->published_at->format('d M Y') : $news->created_at->format('d M Y') }}</small>
                            <a href="{{ route('news.detail', $news->slug) }}" class="btn btn-sm btn-primary">Baca</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('news') }}" class="btn btn-outline-primary">Lihat Semua Berita</a>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold">Galeri Kegiatan</h2>
                <p class="lead text-muted">Dokumentasi kegiatan dan program yang telah kami laksanakan</p>
            </div>
        </div>

        <div class="row">
            @foreach($gallery as $item)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card h-100 shadow-sm">
                    @if($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top" alt="{{ $item->alt_text ?? $item->deskripsi }}" style="height: 200px; object-fit: cover;">
                    @else
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                            <i class="bi bi-image text-muted" style="font-size: 3rem;"></i>
                        </div>
                    @endif
                    @if($item->deskripsi)
                    <div class="card-body">
                        <p class="card-text small">{{ $item->deskripsi }}</p>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('gallery') }}" class="btn btn-outline-primary">Lihat Galeri Lengkap</a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container text-center">
        <h2 class="display-5 fw-bold mb-4">Mari Bergabung Bersama Kami</h2>
        <p class="lead mb-4">Bersama kita bisa membuat perubahan yang lebih baik untuk masyarakat</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Hubungi Kami</a>
            <a href="{{ route('programs') }}" class="btn btn-outline-light btn-lg">Lihat Program</a>
        </div>
    </div>
</section>
@endsection
