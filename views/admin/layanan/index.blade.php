@extends('admin.layouts.admin')

@section('page-title', 'Kelola Layanan')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="fw-bold mb-0">Daftar Layanan</h5>
    <a href="{{ route('admin.layanan.create') }}" class="btn btn-success" style="background-color:#0d524d; border-color:#0d524d;">
        <i class="bi bi-plus-lg me-1"></i> Tambah Layanan
    </a>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Nama Layanan</th>
                        <th>Deskripsi</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($layanans as $layanan)
                    <tr>
                        <td>{{ $layanan->nama_layanan }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($layanan->deskripsi, 80) }}</td>
                        <td class="text-end">
                            <a href="{{ route('admin.layanan.edit', $layanan->id) }}" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('admin.layanan.destroy', $layanan->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus layanan ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="3" class="text-center text-muted py-4">Belum ada data layanan.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $layanans->links() }}
    </div>
</div>
@endsection
