@extends('admin.layouts.admin')

@section('page-title', 'Kelola Artikel')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="fw-bold mb-0">Daftar Artikel</h5>
    <a href="{{ route('admin.artikel.create') }}" class="btn btn-success" style="background-color:#0d524d; border-color:#0d524d;">
        <i class="bi bi-plus-lg me-1"></i> Tambah Artikel
    </a>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Tanggal</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($artikels as $artikel)
                    <tr>
                        <td><img src="{{ asset('gambar/artikel/'.$artikel->gambar) }}" style="width:60px;height:45px;object-fit:cover;border-radius:4px;"></td>
                        <td>{{ $artikel->judul }}</td>
                        <td>{{ $artikel->penulis }}</td>
                        <td>{{ $artikel->created_at->format('d M Y') }}</td>
                        <td class="text-end">
                            <a href="{{ route('admin.artikel.edit', $artikel->id) }}" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('admin.artikel.destroy', $artikel->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus artikel ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="5" class="text-center text-muted py-4">Belum ada data artikel.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $artikels->links() }}
    </div>
</div>
@endsection
