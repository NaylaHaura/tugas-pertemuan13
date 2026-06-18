<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Profil perusahaan cukup 1 baris data, jadi langsung tampilkan form edit.
     * Kalau belum ada datanya sama sekali, buat record kosong dulu.
     */
    public function edit()
    {
        $profil = CompanyProfile::first();

        if (!$profil) {
            $profil = CompanyProfile::create([
                'nama_perusahaan' => 'PT L\'Essential',
            ]);
        }

        return view('admin.profil.edit', compact('profil'));
    }

    public function update(Request $request)
    {
        $profil = CompanyProfile::first();

        $validated = $request->validate([
            'nama_perusahaan' => 'required|string|max:255',
            'alamat'          => 'nullable|string|max:255',
            'telepon'         => 'nullable|string|max:50',
            'email'           => 'nullable|email|max:255',
            'deskripsi'       => 'nullable|string',
            'visi'            => 'nullable|string',
            'misi'            => 'nullable|string',
            'logo'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ], [
            'nama_perusahaan.required' => 'Nama perusahaan wajib diisi.',
            'email.email'              => 'Format email tidak valid.',
            'logo.image'                => 'File yang diupload harus berupa gambar.',
            'logo.mimes'                => 'Format logo harus jpg, jpeg, png, atau webp.',
            'logo.max'                  => 'Ukuran logo maksimal 2MB.',
        ]);

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('gambar/profil'), $filename);
            $validated['logo'] = $filename;
        }

        $profil->update($validated);

        return redirect()->route('admin.profil.edit')->with('success', 'Profil perusahaan berhasil diperbarui.');
    }
}
