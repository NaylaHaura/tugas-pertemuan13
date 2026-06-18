@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center text-toska-gelap fw-bold mb-5">Katalog Produk PT L'Essential</h2>
    
    <div class="row">
        @foreach($data_produk as $p)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow border-0 overflow-hidden">
                <img src="{{ asset('gambar/products/' . $p->gambar) }}" 
                     class="card-img-top" 
                     alt="{{ $p->nama_produk }}"
                     style="height: 250px; object-fit: cover;">
                
                <div class="card-body">
                    <span class="badge mb-2 px-3 py-2 
                        {{ str_contains(strtolower($p->kategori), 'house') ? 'hijau-toska-gelap' : 'bg-primary' }}">
                        {{ $p->kategori }}
                    </span>
                    
                    <h4 class="card-title fw-bold text-toska-gelap">{{ $p->nama_produk }}</h4>
                    <p class="card-text text-muted small">{{ $p->deskripsi }}</p>
                </div>
                <div class="card-footer bg-white border-0 pb-4">
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection