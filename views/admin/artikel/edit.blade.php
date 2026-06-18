@extends('admin.layouts.admin')

@section('page-title', 'Edit Artikel')

@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-body p-4">
        <form action="{{ route('admin.artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Judul Artikel</label>
                <input type="text" name="judul" value="{{ old('judul', $artikel->judul) }}" class="form-control @error('judul') is-invalid @enderror">
                @error('judul')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Isi Artikel</label>
                <textarea name="isi" rows="6" class="form-control @error('isi') is-invalid @enderror">{{ old('isi', $artikel->isi) }}</textarea>
                @error('isi')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Penulis</label>
                <input type="text" name="penulis" value="{{ old('penulis', $artikel->penulis) }}" class="form-control @error('penulis') is-invalid @enderror">
                @error('penulis')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Link Sumber Asli (opsional)</label>
                <input type="text" name="link_asli" value="{{ old('link_asli', $artikel->link_asli) }}" class="form-control @error('link_asli') is-invalid @enderror">
                @error('link_asli')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Gambar saat ini</label><br>
                <img src="{{ asset('gambar/artikel/'.$artikel->gambar) }}" style="width:120px;border-radius:4px;" class="mb-2"><br>
                <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
                <small class="text-muted">Biarkan kosong jika tidak ingin mengganti gambar.</small>
                @error('gambar')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <button type="submit" class="btn btn-success" style="background-color:#0d524d; border-color:#0d524d;">Update</button>
            <a href="{{ route('admin.artikel.index') }}" class="btn btn-outline-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
