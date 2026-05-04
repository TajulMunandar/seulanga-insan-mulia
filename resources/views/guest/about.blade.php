@extends('guest.layout')

@section('title', 'Tentang Kami - Yayasan Seulanga Insan Mulia')

@section('content')
<!-- Page Header -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold">Tentang Kami</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                        <li class="breadcrumb-item active">Tentang Kami</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- About Content -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="mb-5">
                    <h2 class="h1 mb-4">Deskripsi</h2>
                    <p class="lead">{{ $about->deskripsi }}</p>
                </div>

                @if($about->visi)
                <div class="mb-5">
                    <h2 class="h1 mb-4">Visi</h2>
                    <p class="lead">{{ $about->visi }}</p>
                </div>
                @endif

                @if($about->misi)
                <div class="mb-5">
                    <h2 class="h1 mb-4">Misi</h2>
                    <p class="lead">{{ $about->misi }}</p>
                </div>
                @endif

                @if($about->sejarah)
                <div class="mb-5">
                    <h2 class="h1 mb-4">Sejarah</h2>
                    <p class="lead">{{ $about->sejarah }}</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
