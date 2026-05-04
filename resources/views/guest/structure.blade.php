@extends('guest.layout')

@section('title', 'Struktur Organisasi - Yayasan Seulanga Insan Mulia')

@section('content')
<!-- Page Header -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold">Struktur Organisasi</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                        <li class="breadcrumb-item active">Struktur Organisasi</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Structure Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            @foreach($structures as $structure)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm text-center">
                    @if($structure->foto)
                        <img src="{{ asset('storage/' . $structure->foto) }}" class="card-img-top" alt="{{ $structure->nama }}" style="height: 250px; object-fit: cover;">
                    @else
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 250px;">
                            <i class="bi bi-person-circle text-muted" style="font-size: 5rem;"></i>
                        </div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $structure->nama }}</h5>
                        <h6 class="card-subtitle mb-3 text-primary">{{ $structure->jabatan }}</h6>
                        @if($structure->deskripsi)
                            <p class="card-text">{{ $structure->deskripsi }}</p>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
