@extends('guest.layout')

@section('title', 'Kontak Kami - Yayasan Seulanga Insan Mulia')

@section('content')
<!-- Page Header -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold">Kontak Kami</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                        <li class="breadcrumb-item active">Kontak Kami</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <h2 class="h1 mb-4">Hubungi Kami</h2>
                <p class="lead mb-4">Kami siap membantu Anda. Silakan hubungi kami untuk informasi lebih lanjut tentang program dan kegiatan kami.</p>

                <div class="contact-info mb-4">
                    <div class="d-flex mb-3">
                        <i class="bi bi-geo-alt text-primary me-3" style="font-size: 1.5rem;"></i>
                        <div>
                            <h6 class="mb-1">Alamat</h6>
                            <p class="mb-0">Jl. Contoh No. 123, Jakarta Pusat, DKI Jakarta 10110</p>
                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <i class="bi bi-telephone text-primary me-3" style="font-size: 1.5rem;"></i>
                        <div>
                            <h6 class="mb-1">Telepon</h6>
                            <p class="mb-0">+62 21 1234 5678</p>
                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <i class="bi bi-envelope text-primary me-3" style="font-size: 1.5rem;"></i>
                        <div>
                            <h6 class="mb-1">Email</h6>
                            <p class="mb-0">info@seulanga.org</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <i class="bi bi-clock text-primary me-3" style="font-size: 1.5rem;"></i>
                        <div>
                            <h6 class="mb-1">Jam Kerja</h6>
                            <p class="mb-0">Senin - Jumat: 08:00 - 17:00 WIB</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-4">Kirim Pesan</h3>

                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form method="POST" action="{{ route('contact.send') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                                @error('name')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                @error('email')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="subject" class="form-label">Subjek</label>
                                <input type="text" class="form-control" id="subject" name="subject" required>
                                @error('subject')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Pesan</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                @error('message')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mb-4">Lokasi Kami</h2>
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.816666!3d-6.200000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTInMDAuMCJTIDEwNsKwNDknMDAuMCJF!5e0!3m2!1sen!2sid!4v1635000000000!5m2!1sen!2sid" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
