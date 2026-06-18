@extends('admin.layouts.admin')

@section('page-title', 'Kelola Galeri')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="fw-bold mb-0">Daftar Foto Galeri</h5>
    <a href="{{ route('admin.galeri.create') }}" class="btn btn-success" style="background-color:#0d524d; border-color:#0d524d;">
        <i class="bi bi-plus-lg me-1"></i> Tambah Foto
    </a>
</div>

<div class="row g-3">
    @forelse($galeris as $galeri)
    <div class="col-md-3">
        <div class="card border-0 shadow-sm h-100">
            <img src="{{ asset('gambar/galeri/'.$galeri->gambar) }}" style="height:140px;object-fit:cover;">
            <div class="card-body">
                <p class="fw-bold mb-1 small">{{ $galeri->judul }}</p>
                <div class="d-flex gap-1">
                    <a href="{{ route('admin.galeri.edit', $galeri->id) }}" class="btn btn-sm btn-outline-primary flex-grow-1">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <form action="{{ route('admin.galeri.destroy', $galeri->id) }}" method="POST" class="flex-grow-1" onsubmit="return confirm('Hapus foto ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger w-100">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @empty
    <p class="text-muted text-center py-4">Belum ada foto di galeri.</p>
    @endforelse
</div>

<div class="mt-3">{{ $galeris->links() }}</div>
@endsection
