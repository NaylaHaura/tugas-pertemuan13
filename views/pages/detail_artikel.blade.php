@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ url('/artikel') }}" class="btn btn-sm btn-outline-secondary mb-4">
                <i class="bi bi-arrow-left"></i> Kembali ke Daftar Artikel
            </a>

            <!-- Gambar Artikel -->
            <img src="{{ asset('assets/img/' . $artikel->gambar) }}" class="img-fluid rounded shadow mb-4" alt="{{ $artikel->judul }}">

            <!-- Konten Artikel -->
            <h1 class="fw-bold mb-3">{{ $artikel->judul }}</h1>
            <p class="text-muted small mb-4">
                {{-- Gunakan pengecekan jika kolom penulis tidak ada agar tidak error --}}
                Oleh: {{ $artikel->penulis ?? 'Admin L\'Essential' }} | {{ date('d M Y', strtotime($artikel->created_at)) }}
            </p>
            <hr>
            
            <div class="artikel-content mb-5" style="line-height: 1.8; font-size: 1.1rem; text-align: justify;">
                {{-- Ini untuk menampilkan ringkasan atau intro artikel --}}
                {!! nl2br(e($artikel->isi)) !!}
            </div>

            @if(isset($artikel->link_asli) && $artikel->link_asli != '#')
            <div class="card bg-light border-0 p-4 text-center shadow-sm">
                <p class="mb-2 text-muted">Ingin membaca artikel lengkapnya?</p>
                <h5 class="fw-bold mb-3">Baca artikel selengkapnya di sumber asli:</h5>
                <a href="{{ $artikel->link_asli }}" target="_blank" class="btn btn-primary btn-lg px-4">
                    Kunjungi Situs Sumber <i class="bi bi-box-arrow-up-right ms-1"></i>
                </a>
            </div>
            @endif

        </div>
    </div>
</div>
@endsection