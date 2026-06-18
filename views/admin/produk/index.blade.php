@extends('admin.layouts.admin')

@section('page-title', 'Kelola Produk')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="fw-bold mb-0">Daftar Produk</h5>
    <div>
        <a href="{{ route('admin.produk.pdf') }}" target="_blank" class="btn btn-outline-secondary">
            <i class="bi bi-file-earmark-pdf me-1"></i> Cetak PDF
        </a>
        <a href="{{ route('admin.produk.create') }}" class="btn btn-success" style="background-color:#0d524d; border-color:#0d524d;">
            <i class="bi bi-plus-lg me-1"></i> Tambah Produk
        </a>
    </div>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($produks as $produk)
                    <tr>
                        <td><img src="{{ asset('gambar/products/'.$produk->gambar) }}" style="width:60px;height:45px;object-fit:cover;border-radius:4px;"></td>
                        <td>{{ $produk->nama_produk }}</td>
                        <td><span class="badge bg-secondary">{{ $produk->kategori }}</span></td>
                        <td class="text-end">
                            <a href="{{ route('admin.produk.edit', $produk->id) }}" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('admin.produk.destroy', $produk->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus produk ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="4" class="text-center text-muted py-4">Belum ada data produk.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $produks->links() }}
    </div>
</div>
@endsection
