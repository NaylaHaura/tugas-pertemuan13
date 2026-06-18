@extends('admin.layouts.admin')

@section('page-title', 'Edit Foto Galeri')

@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-body p-4">
        <form action="{{ route('admin.galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Judul Foto</label>
                <input type="text" name="judul" value="{{ old('judul', $galeri->judul) }}" class="form-control @error('judul') is-invalid @enderror">
                @error('judul')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Keterangan (opsional)</label>
                <textarea name="keterangan" rows="3" class="form-control @error('keterangan') is-invalid @enderror">{{ old('keterangan', $galeri->keterangan) }}</textarea>
                @error('keterangan')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Gambar saat ini</label><br>
                <img src="{{ asset('gambar/galeri/'.$galeri->gambar) }}" style="width:120px;border-radius:4px;" class="mb-2"><br>
                <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
                <small class="text-muted">Biarkan kosong jika tidak ingin mengganti gambar.</small>
                @error('gambar')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <button type="submit" class="btn btn-success" style="background-color:#0d524d; border-color:#0d524d;">Update</button>
            <a href="{{ route('admin.galeri.index') }}" class="btn btn-outline-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
