<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Product::latest()->paginate(10);
        return view('admin.produk.index', compact('produks'));
    }

    public function create()
    {
        return view('admin.produk.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_produk'     => 'required|string|max:255',
            'kategori'        => 'required|string|max:100',
            'deskripsi'       => 'required|string',
            'link_eksternal'  => 'nullable|url|max:255',
            'gambar'          => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ], [
            'nama_produk.required' => 'Nama produk wajib diisi.',
            'kategori.required'    => 'Kategori wajib diisi.',
            'deskripsi.required'   => 'Deskripsi wajib diisi.',
            'link_eksternal.url'   => 'Link eksternal harus berupa URL yang valid.',
            'gambar.required'      => 'Gambar produk wajib diupload.',
            'gambar.image'         => 'File yang diupload harus berupa gambar.',
            'gambar.mimes'         => 'Format gambar harus jpg, jpeg, png, atau webp.',
            'gambar.max'           => 'Ukuran gambar maksimal 2MB.',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('gambar/products'), $filename);
            $validated['gambar'] = $filename;
        }

        Product::create($validated);

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit(Product $produk)
    {
        return view('admin.produk.edit', compact('produk'));
    }

    public function update(Request $request, Product $produk)
    {
        $validated = $request->validate([
            'nama_produk'    => 'required|string|max:255',
            'kategori'       => 'required|string|max:100',
            'deskripsi'      => 'required|string',
            'link_eksternal' => 'nullable|url|max:255',
            'gambar'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ], [
            'nama_produk.required' => 'Nama produk wajib diisi.',
            'kategori.required'    => 'Kategori wajib diisi.',
            'deskripsi.required'   => 'Deskripsi wajib diisi.',
            'link_eksternal.url'   => 'Link eksternal harus berupa URL yang valid.',
            'gambar.image'         => 'File yang diupload harus berupa gambar.',
            'gambar.mimes'         => 'Format gambar harus jpg, jpeg, png, atau webp.',
            'gambar.max'           => 'Ukuran gambar maksimal 2MB.',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('gambar/products'), $filename);
            $validated['gambar'] = $filename;
        }

        $produk->update($validated);

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy(Product $produk)
    {
        $produk->delete();
        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil dihapus.');
    }

    /**
     * Export laporan data Produk ke PDF menggunakan DomPDF.
     */
    public function exportPdf()
    {
        $produks = Product::latest()->get();
        $pdf = Pdf::loadView('admin.produk.pdf', compact('produks'))->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-produk-' . date('Y-m-d') . '.pdf');
    }
}
