@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="fw-bold mb-5 text-center text-toska-gelap">Galeri PT L'Essential</h2>

    @if($semua_galeri->isEmpty())
        <p class="text-center text-muted">Belum ada foto di galeri.</p>
    @else
    <div class="row g-4">
        @foreach($semua_galeri as $item)
        <div class="col-md-4 mb-2">
            <div class="card h-100 shadow-sm border-0 overflow-hidden">
                <img src="{{ asset('gambar/galeri/'.$item->gambar) }}" class="card-img-top" alt="{{ $item->judul }}" style="height: 220px; object-fit: cover;">
                <div class="card-body">
                    <h6 class="fw-bold mb-1">{{ $item->judul }}</h6>
                    @if($item->keterangan)
                        <p class="text-muted small mb-0">{{ $item->keterangan }}</p>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection
