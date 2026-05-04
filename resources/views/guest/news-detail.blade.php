@extends('guest.layout')

@section('title', $news->judul . ' - Yayasan Seulanga Insan Mulia')

@section('content')
<!-- Page Header -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('news') }}">Berita</a></li>
                        <li class="breadcrumb-item active">{{ $news->judul }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- News Detail -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <article class="news-article">
                    <header class="mb-4">
                        <h1 class="display-5 fw-bold mb-3">{{ $news->judul }}</h1>
                        <div class="news-meta text-muted mb-4">
                            <span class="me-3">
                                <i class="bi bi-calendar me-1"></i>
                                {{ $news->published_at ? $news->published_at->format('d F Y') : $news->created_at->format('d F Y') }}
                            </span>
                            <span class="me-3">
                                <i class="bi bi-clock me-1"></i>
                                {{ $news->published_at ? $news->published_at->format('H:i') : $news->created_at->format('H:i') }} WIB
                            </span>
                            @if($news->status === 'published')
                                <span class="badge bg-success">Published</span>
                            @else
                                <span class="badge bg-warning">Draft</span>
                            @endif
                        </div>
                    </header>

                    @if($news->gambar)
                        <div class="news-image mb-4">
                            <img src="{{ asset('storage/' . $news->gambar) }}" alt="{{ $news->judul }}" class="img-fluid rounded shadow">
                        </div>
                    @endif

                    @if($news->excerpt)
                        <div class="news-excerpt mb-4">
                            <p class="lead">{{ $news->excerpt }}</p>
                        </div>
                    @endif

                    <div class="news-content">
                        {!! $news->konten !!}
                    </div>
                </article>

                <!-- Share Buttons -->
                <div class="share-section mt-5 pt-4 border-top">
                    <h5 class="mb-3">Bagikan Berita Ini</h5>
                    <div class="d-flex gap-2">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank" class="btn btn-outline-primary btn-sm">
                            <i class="bi bi-facebook me-1"></i>Facebook
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}&text={{ urlencode($news->judul) }}" target="_blank" class="btn btn-outline-info btn-sm">
                            <i class="bi bi-twitter me-1"></i>Twitter
                        </a>
                        <a href="https://wa.me/?text={{ urlencode($news->judul . ' - ' . url()->current()) }}" target="_blank" class="btn btn-outline-success btn-sm">
                            <i class="bi bi-whatsapp me-1"></i>WhatsApp
                        </a>
                    </div>
                </div>

                <!-- Back to News -->
                <div class="text-center mt-4">
                    <a href="{{ route('news') }}" class="btn btn-outline-primary">
                        <i class="bi bi-arrow-left me-2"></i>Kembali ke Berita
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Schema.org JSON-LD -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "NewsArticle",
    "headline": "{{ $news->judul }}",
    "description": "{{ $news->excerpt ?? Str::limit(strip_tags($news->konten), 160) }}",
    "image": [
        "{{ $news->gambar ? asset('storage/' . $news->gambar) : asset('assets/img/logo.png') }}"
    ],
    "datePublished": "{{ $news->published_at ? $news->published_at->toISOString() : $news->created_at->toISOString() }}",
    "dateModified": "{{ $news->updated_at->toISOString() }}",
    "author": {
        "@type": "Organization",
        "name": "Yayasan Seulanga Insan Mulia"
    },
    "publisher": {
        "@type": "Organization",
        "name": "Yayasan Seulanga Insan Mulia",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('assets/img/logo.png') }}"
        }
    },
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ url()->current() }}"
    }
}
</script>
@endsection
