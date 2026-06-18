@extends('admin.layouts.admin')

@section('page-title', 'Profil Perusahaan')

@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-body p-4">
        <form action="{{ route('admin.profil.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nama Perusahaan</label>
                <input type="text" name="nama_perusahaan" value="{{ old('nama_perusahaan', $profil->nama_perusahaan) }}" class="form-control @error('nama_perusahaan') is-invalid @enderror">
                @error('nama_perusahaan')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Telepon</label>
                    <input type="text" name="telepon" value="{{ old('telepon', $profil->telepon) }}" class="form-control @error('telepon') is-invalid @enderror">
                    @error('telepon')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="{{ old('email', $profil->email) }}" class="form-control @error('email') is-invalid @enderror">
                    @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" value="{{ old('alamat', $profil->alamat) }}" class="form-control @error('alamat') is-invalid @enderror">
                @error('alamat')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi Singkat</label>
                <textarea name="deskripsi" rows="3" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $profil->deskripsi) }}</textarea>
                @error('deskripsi')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Visi</label>
                <textarea name="visi" rows="2" class="form-control @error('visi') is-invalid @enderror">{{ old('visi', $profil->visi) }}</textarea>
                @error('visi')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Misi (1 poin per baris)</label>
                <textarea name="misi" rows="4" class="form-control @error('misi') is-invalid @enderror">{{ old('misi', $profil->misi) }}</textarea>
                @error('misi')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Logo Perusahaan</label><br>
                @if($profil->logo)
                    <img src="{{ asset('gambar/profil/'.$profil->logo) }}" style="width:100px;border-radius:4px;" class="mb-2"><br>
                @endif
                <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror">
                <small class="text-muted">Biarkan kosong jika tidak ingin mengganti logo.</small>
                @error('logo')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <button type="submit" class="btn btn-success" style="background-color:#0d524d; border-color:#0d524d;">Simpan Perubahan</button>
        </form>
    </div>
</div>
@endsection
