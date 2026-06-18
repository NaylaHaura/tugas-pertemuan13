@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center text-toska-gelap fw-bold mb-4">Tentang {{ $profil->nama_perusahaan ?? "PT L'Essential" }}</h2>

    @if(!empty($profil->logo))
    <div class="text-center mb-4">
        <img src="{{ asset('gambar/profil/' . $profil->logo) }}" alt="Logo Perusahaan" style="max-height: 120px;">
    </div>
    @endif

    <p class="text-center mb-5 mx-auto" style="max-width: 800px;">
        {{ $profil->deskripsi ?? "Selamat datang di PT L'Essential. Kami adalah perusahaan yang berdedikasi untuk memberikan solusi terbaik bagi kebutuhan industri Anda dengan standar kualitas tertinggi." }}
    </p>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow border-0 overflow-hidden">
                <div class="card-body p-5">

                    <div class="mb-5">
                        <div class="d-flex align-items-center mb-3">
                            <div class="hijau-toska-gelap p-2 rounded-circle me-3" style="width: 10px; height: 10px;"></div>
                            <h3 class="text-success fw-bold mb-2">Visi Kami</h3>
                        </div>
                        <p class="lead text-muted ps-4">
                            {{ $profil->visi ?? 'Menjadi pemimpin pasar dalam penyediaan layanan berkualitas yang inovatif dan terpercaya.' }}
                        </p>
                    </div>

                    <hr class="my-5 opacity-25">

                    <div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="hijau-toska-gelap p-2 rounded-circle me-3" style="width: 10px; height: 10px;"></div>
                            <h3 class="text-success fw-bold mb-2">Misi Kami</h3>
                        </div>
                        @if(!empty($profil->misi))
                            <p class="ps-4" style="line-height: 1.7;">{!! nl2br(e($profil->misi)) !!}</p>
                        @else
                        <ul class="list-unstyled ps-4">
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-toska-gelap me-3">✔</span>
                                <span>Mengutamakan kepuasan pelanggan di atas segalanya.</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-toska-gelap me-3">✔</span>
                                <span>Menerapkan teknologi terbaru dalam setiap layanan kami.</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-toska-gelap me-3">✔</span>
                                <span>Menciptakan nilai tambah bagi mitra dan masyarakat.</span>
                            </li>
                        </ul>
                        @endif
                    </div>

                    @if(!empty($profil->alamat) || !empty($profil->telepon) || !empty($profil->email))
                    <hr class="my-5 opacity-25">
                    <div class="row text-center">
                        @if(!empty($profil->alamat))
                        <div class="col-md-4 mb-3">
                            <i class="bi bi-geo-alt fs-3 text-toska-gelap"></i>
                            <p class="small text-muted mt-2 mb-0">{{ $profil->alamat }}</p>
                        </div>
                        @endif
                        @if(!empty($profil->telepon))
                        <div class="col-md-4 mb-3">
                            <i class="bi bi-telephone fs-3 text-toska-gelap"></i>
                            <p class="small text-muted mt-2 mb-0">{{ $profil->telepon }}</p>
                        </div>
                        @endif
                        @if(!empty($profil->email))
                        <div class="col-md-4 mb-3">
                            <i class="bi bi-envelope fs-3 text-toska-gelap"></i>
                            <p class="small text-muted mt-2 mb-0">{{ $profil->email }}</p>
                        </div>
                        @endif
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
