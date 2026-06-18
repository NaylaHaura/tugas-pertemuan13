@extends('admin.layouts.admin')

@section('page-title', 'Edit Produk')

@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-body p-4">
        <form action="{{ route('admin.produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nama Produk</label>
                <input type="text" name="nama_produk" value="{{ old('nama_produk', $produk->nama_produk) }}" class="form-control @error('nama_produk') is-invalid @enderror">
                @error('nama_produk')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <input type="text" name="kategori" value="{{ old('kategori', $produk->kategori) }}" class="form-control @error('kategori') is-invalid @enderror">
                @error('kategori')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="deskripsi" rows="4" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $produk->deskripsi) }}</textarea>
                @error('deskripsi')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Link Eksternal (opsional)</label>
                <input type="text" name="link_eksternal" value="{{ old('link_eksternal', $produk->link_eksternal) }}" class="form-control @error('link_eksternal') is-invalid @enderror">
                @error('link_eksternal')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Gambar saat ini</label><br>
                <img src="{{ asset('gambar/products/'.$produk->gambar) }}" style="width:120px;border-radius:4px;" class="mb-2"><br>
                <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
                <small class="text-muted">Biarkan kosong jika tidak ingin mengganti gambar.</small>
                @error('gambar')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <button type="submit" class="btn btn-success" style="background-color:#0d524d; border-color:#0d524d;">Update</button>
            <a href="{{ route('admin.produk.index') }}" class="btn btn-outline-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
