@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="fw-bold mb-4 text-center">Artikel & Berita L'Essential</h2>
    <div class="row">
        @foreach($semua_artikel as $item)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('gambar/artikel/'.$item->gambar) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="fw-bold">{{ $item->judul }}</h5>
                    <p class="text-muted small">{{ Str::limit($item->isi, 100) }}</p>
                    <a href="{{ $item->link_asli ?? '#' }}" target="_blank" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
                <div class="card-footer bg-white border-0 text-muted small">
                    Oleh: {{ $item->penulis }} | {{ date('d M Y', strtotime($item->created_at)) }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
