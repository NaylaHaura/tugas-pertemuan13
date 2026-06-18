<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest()->paginate(12);
        return view('admin.galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul'      => 'required|string|max:255',
            'keterangan' => 'nullable|string',
            'gambar'     => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ], [
            'judul.required'  => 'Judul foto wajib diisi.',
            'gambar.required' => 'Gambar wajib diupload.',
            'gambar.image'    => 'File yang diupload harus berupa gambar.',
            'gambar.mimes'    => 'Format gambar harus jpg, jpeg, png, atau webp.',
            'gambar.max'      => 'Ukuran gambar maksimal 2MB.',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('gambar/galeri'), $filename);
            $validated['gambar'] = $filename;
        }

        Galeri::create($validated);

        return redirect()->route('admin.galeri.index')->with('success', 'Foto galeri berhasil ditambahkan.');
    }

    public function edit(Galeri $galeri)
    {
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, Galeri $galeri)
    {
        $validated = $request->validate([
            'judul'      => 'required|string|max:255',
            'keterangan' => 'nullable|string',
            'gambar'     => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ], [
            'judul.required' => 'Judul foto wajib diisi.',
            'gambar.image'   => 'File yang diupload harus berupa gambar.',
            'gambar.mimes'   => 'Format gambar harus jpg, jpeg, png, atau webp.',
            'gambar.max'     => 'Ukuran gambar maksimal 2MB.',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('gambar/galeri'), $filename);
            $validated['gambar'] = $filename;
        }

        $galeri->update($validated);

        return redirect()->route('admin.galeri.index')->with('success', 'Foto galeri berhasil diperbarui.');
    }

    public function destroy(Galeri $galeri)
    {
        $galeri->delete();
        return redirect()->route('admin.galeri.index')->with('success', 'Foto galeri berhasil dihapus.');
    }
}
