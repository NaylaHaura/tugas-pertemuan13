@extends('admin.layouts.admin')

@section('page-title', 'Dashboard')

@section('content')
<div class="row g-3 mb-4">
    <div class="col-md-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <p class="text-muted small mb-1">Total Artikel</p>
                <h3 class="fw-bold mb-0">{{ $totalArtikel }}</h3>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <p class="text-muted small mb-1">Total Produk</p>
                <h3 class="fw-bold mb-0">{{ $totalProduk }}</h3>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <p class="text-muted small mb-1">Total Layanan</p>
                <h3 class="fw-bold mb-0">{{ $totalLayanan }}</h3>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <p class="text-muted small mb-1">Total Foto Galeri</p>
                <h3 class="fw-bold mb-0">{{ $totalGaleri }}</h3>
            </div>
        </div>
    </div>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body">
        <h6 class="fw-bold mb-3">Menu Pengelolaan Sistem</h6>
        <div class="row g-3">
            <div class="col-md-4">
                <a href="{{ route('admin.artikel.index') }}" class="btn btn-outline-success w-100 text-start">
                    <i class="bi bi-newspaper me-2"></i> Kelola Artikel/Berita
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('admin.produk.index') }}" class="btn btn-outline-success w-100 text-start">
                    <i class="bi bi-box-seam me-2"></i> Kelola Produk
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('admin.layanan.index') }}" class="btn btn-outline-success w-100 text-start">
                    <i class="bi bi-gear me-2"></i> Kelola Layanan
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('admin.galeri.index') }}" class="btn btn-outline-success w-100 text-start">
                    <i class="bi bi-images me-2"></i> Kelola Galeri
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('admin.profil.edit') }}" class="btn btn-outline-success w-100 text-start">
                    <i class="bi bi-building me-2"></i> Profil Perusahaan
                    @if(!$profilSudahDiisi)
                        <span class="badge bg-warning text-dark ms-1">Belum diisi</span>
                    @endif
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('admin.produk.pdf') }}" target="_blank" class="btn btn-outline-secondary w-100 text-start">
                    <i class="bi bi-file-earmark-pdf me-2"></i> Cetak Laporan Produk (PDF)
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
