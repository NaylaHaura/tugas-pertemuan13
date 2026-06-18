@extends('admin.layouts.admin')

@section('page-title', 'Edit Layanan')

@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-body p-4">
        <form action="{{ route('admin.layanan.update', $layanan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nama Layanan</label>
                <input type="text" name="nama_layanan" value="{{ old('nama_layanan', $layanan->nama_layanan) }}" class="form-control @error('nama_layanan') is-invalid @enderror">
                @error('nama_layanan')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="deskripsi" rows="4" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $layanan->deskripsi) }}</textarea>
                @error('deskripsi')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <button type="submit" class="btn btn-success" style="background-color:#0d524d; border-color:#0d524d;">Update</button>
            <a href="{{ route('admin.layanan.index') }}" class="btn btn-outline-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
