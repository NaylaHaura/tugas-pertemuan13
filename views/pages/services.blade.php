@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center text-toska-gelap fw-bold mb-4">Layanan Kami</h1>

    <div class="row">
        @foreach($data_layanan as $s)
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow border-0">
                <div class="card-body p-4">
                    <span class="badge hijau-toska-gelap mb-2 px-3 py-2">Service Excellence</span>
                    
                    <h4 class="text-success fw-bold mb-2">{{ $s->nama_layanan }}</h4>
                    <hr>
                    <p class="card-text text-muted" style="line-height: 1.7;">
                        {{ $s->deskripsi }}
                    </p>
                </div>
                <div class="card-footer bg-white border-0 pb-4 px-4">
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection