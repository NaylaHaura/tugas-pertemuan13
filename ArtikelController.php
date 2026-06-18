<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::latest()->paginate(10);
        return view('admin.artikel.index', compact('artikels'));
    }

    public function create()
    {
        return view('admin.artikel.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul'     => 'required|string|max:255',
            'isi'       => 'required|string',
            'link_asli' => 'nullable|string|max:255',
            'penulis'   => 'nullable|string|max:255',
            'gambar'    => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ], [
            'judul.required'  => 'Judul artikel wajib diisi.',
            'isi.required'    => 'Isi artikel wajib diisi.',
            'gambar.required' => 'Gambar artikel wajib diupload.',
            'gambar.image'    => 'File yang diupload harus berupa gambar.',
            'gambar.mimes'    => 'Format gambar harus jpg, jpeg, png, atau webp.',
            'gambar.max'      => 'Ukuran gambar maksimal 2MB.',
        ]);

        $validated['slug'] = Str::slug($validated['judul']) . '-' . time();
        $validated['penulis'] = $validated['penulis'] ?? 'Admin L\'Essential';

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('gambar/artikel'), $filename);
            $validated['gambar'] = $filename;
        }

        Artikel::create($validated);

        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil ditambahkan.');
    }

    public function edit(Artikel $artikel)
    {
        return view('admin.artikel.edit', compact('artikel'));
    }

    public function update(Request $request, Artikel $artikel)
    {
        $validated = $request->validate([
            'judul'     => 'required|string|max:255',
            'isi'       => 'required|string',
            'link_asli' => 'nullable|string|max:255',
            'penulis'   => 'nullable|string|max:255',
            'gambar'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ], [
            'judul.required' => 'Judul artikel wajib diisi.',
            'isi.required'   => 'Isi artikel wajib diisi.',
            'gambar.image'   => 'File yang diupload harus berupa gambar.',
            'gambar.mimes'   => 'Format gambar harus jpg, jpeg, png, atau webp.',
            'gambar.max'     => 'Ukuran gambar maksimal 2MB.',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('gambar/artikel'), $filename);
            $validated['gambar'] = $filename;
        }

        $artikel->update($validated);

        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy(Artikel $artikel)
    {
        $artikel->delete();
        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
