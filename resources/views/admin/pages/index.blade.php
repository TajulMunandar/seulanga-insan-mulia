@extends('admin.layouts.app')

@section('content')

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-lg-8 mb-4 order-0">
                                <div class="card">
                                    <div class="d-flex align-items-end row">
                                        <div class="col-sm-7">
                                            <div class="card-body">
                                                <h5 class="card-title text-primary">Selamat Datang, {{ auth()->user()->name }}! 🎉</h5>
                                                <p class="mb-4">
                                                    Selamat datang di dashboard admin Yayasan Seulanga Insan Mulia.
                                                    Kelola konten website dengan mudah dan efisien.
                                                </p>

                                                <a href="{{ route('admin.berita.index') }}" class="btn btn-sm btn-outline-primary">Kelola Berita</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 text-center text-sm-left">
                                            <div class="card-body pb-0 px-0 px-md-4">
                                                <img src="../assets/img/illustrations/man-with-laptop-light.png"
                                                    height="140" alt="Dashboard Admin"
                                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 order-1">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="../assets/img/icons/unicons/chart-success.png"
                                                            alt="Berita" class="rounded" />
                                                    </div>
                                                </div>
                                                <span class="fw-semibold d-block mb-1">Total Berita</span>
                                                <h3 class="card-title mb-2">{{ $stats['total_berita'] }}</h3>
                                                <small class="text-success fw-semibold"><i
                                                        class="bx bx-up-arrow-alt"></i> {{ $stats['berita_published'] }} Published</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="../assets/img/icons/unicons/wallet-info.png"
                                                            alt="Galeri" class="rounded" />
                                                    </div>
                                                </div>
                                                <span>Galeri</span>
                                                <h3 class="card-title text-nowrap mb-1">{{ $stats['total_galeri'] }}</h3>
                                                <small class="text-success fw-semibold"><i
                                                        class="bx bx-up-arrow-alt"></i> Foto</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                                <div class="row">
                                    <div class="col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="../assets/img/icons/unicons/paypal.png"
                                                            alt="Program" class="rounded" />
                                                    </div>
                                                </div>
                                                <span class="d-block mb-1">Program</span>
                                                <h3 class="card-title text-nowrap mb-2">{{ $stats['total_program'] }}</h3>
                                                <small class="text-success fw-semibold"><i
                                                        class="bx bx-up-arrow-alt"></i> Aktif</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="../assets/img/icons/unicons/cc-primary.png"
                                                            alt="Struktur" class="rounded" />
                                                    </div>
                                                </div>
                                                <span class="fw-semibold d-block mb-1">Struktur Org.</span>
                                                <h3 class="card-title mb-2">{{ $stats['total_struktur'] }}</h3>
                                                <small class="text-success fw-semibold"><i
                                                        class="bx bx-up-arrow-alt"></i> Anggota</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Berita Terbaru -->
                            <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                                <div class="card h-100">
                                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                                        <div class="card-title mb-0">
                                            <h5 class="m-0 me-2">Berita Terbaru</h5>
                                            <small class="text-muted">{{ $stats['total_berita'] }} Total Berita</small>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="beritaDropdown"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="beritaDropdown">
                                                <a class="dropdown-item" href="{{ route('admin.berita.index') }}">Lihat Semua</a>
                                                <a class="dropdown-item" href="{{ route('admin.berita.create') }}">Tambah Berita</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="p-0 m-0">
                                            @forelse($recent_berita as $berita)
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-primary">
                                                        <i class="bx bx-news"></i>
                                                    </span>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">{{ Str::limit($berita->judul, 30) }}</h6>
                                                        <small class="text-muted">{{ $berita->created_at->diffForHumans() }}</small>
                                                    </div>
                                                    <div class="user-progress">
                                                        <small class="badge bg-{{ $berita->status === 'published' ? 'success' : 'warning' }}">
                                                            {{ $berita->status }}
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                            @empty
                                            <li class="d-flex">
                                                <div class="text-center w-100 py-4">
                                                    <small class="text-muted">Belum ada berita</small>
                                                </div>
                                            </li>
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/ Order Statistics -->

                            <!-- Quick Actions -->
                            <div class="col-md-6 col-lg-4 order-1 mb-4">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Aksi Cepat</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-grid gap-3">
                                            <a href="{{ route('admin.berita.create') }}" class="btn btn-primary">
                                                <i class="bx bx-plus me-2"></i>Tambah Berita
                                            </a>
                                            <a href="{{ route('admin.galeri.create') }}" class="btn btn-success">
                                                <i class="bx bx-image me-2"></i>Tambah Galeri
                                            </a>
                                            <a href="{{ route('admin.program.create') }}" class="btn btn-info">
                                                <i class="bx bx-list-ul me-2"></i>Tambah Program
                                            </a>
                                            <a href="{{ route('admin.struktur-organisasi.create') }}" class="btn btn-warning">
                                                <i class="bx bx-user me-2"></i>Tambah Struktur
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Quick Actions -->

                            <!-- User Terbaru -->
                            <div class="col-md-6 col-lg-4 order-2 mb-4">
                                <div class="card h-100">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h5 class="card-title m-0 me-2">User Terbaru</h5>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="userDropdown"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="userDropdown">
                                                <a class="dropdown-item" href="{{ route('admin.users.index') }}">Lihat Semua</a>
                                                @if(auth()->user()->role === 'super_admin')
                                                <a class="dropdown-item" href="{{ route('admin.users.create') }}">Tambah User</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="p-0 m-0">
                                            @forelse($recent_users as $user)
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-primary">
                                                        {{ strtoupper(substr($user->name, 0, 1)) }}
                                                    </span>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">{{ $user->name }}</h6>
                                                        <small class="text-muted">{{ $user->created_at->diffForHumans() }}</small>
                                                    </div>
                                                    <div class="user-progress">
                                                        <small class="badge bg-{{ $user->role === 'super_admin' ? 'danger' : 'info' }}">
                                                            {{ $user->role }}
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                            @empty
                                            <li class="d-flex">
                                                <div class="text-center w-100 py-4">
                                                    <small class="text-muted">Belum ada user</small>
                                                </div>
                                            </li>
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/ Transactions -->
                        </div>
                    </div>
@endsection
