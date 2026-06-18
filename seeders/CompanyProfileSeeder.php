<?php

namespace Database\Seeders;

use App\Models\CompanyProfile;
use Illuminate\Database\Seeder;

class CompanyProfileSeeder extends Seeder
{
    /**
     * Isi data awal profil perusahaan, supaya halaman About tidak kosong
     * sebelum admin sempat mengedit lewat panel.
     */
    public function run(): void
    {
        CompanyProfile::updateOrCreate(
            ['id' => 1],
            [
                'nama_perusahaan' => 'PT L\'Essential',
                'alamat'          => 'Taman Tekno Sektor XI Blok G1 No. 1, Tangerang Selatan',
                'telepon'         => '0812-3456-7890',
                'email'           => 'info@l-essential.co.id',
                'deskripsi'       => 'Selamat datang di PT L\'Essential. Kami adalah perusahaan yang berdedikasi untuk memberikan solusi terbaik bagi kebutuhan industri Anda dengan standar kualitas tertinggi.',
                'visi'            => 'Menjadi pemimpin pasar dalam penyediaan layanan berkualitas yang inovatif dan terpercaya.',
                'misi'            => "Mengutamakan kepuasan pelanggan di atas segalanya.\nMenerapkan teknologi terbaru dalam setiap layanan kami.\nMenciptakan nilai tambah bagi mitra dan masyarakat.",
            ]
        );
    }
}
