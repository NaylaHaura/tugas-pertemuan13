<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    \DB::table('artikels')->insert([
        [
            'judul'   => '3 Produk Baru PT L’Essential Jawab Persoalan Kulit Perempuan Indonesia',
            'judul'   => 'Profil PT LEssential, Produsen Skincare dan Kosmetik Berstandar BPOM dan Halal',
            'slug'    => 'profil-pt-l-essential-produsen-skincare-dan-kosmetik-berstandar-bpom-dan-halal',
            'isi'     => 'PT L Essential adalah perusahaan yang bergerak di bidang produksi kosmetik. PT L Essential adalah produsen skincare dan kosmetik yang sudah menjalankan kegiatan usahanya sejak tahun 2004 dan terus berkembang sampai sekarang.',
            'gambar'  => 'artikel1.jpg',
            'link_asli' => 'https://www.liputan6.com/hot/read/5178336/profil-pt-l-essential-produsen-skincare-dan-kosmetik-berstandar-bpom-dan-halal',
            'penulis' => 'Laudia Tysara',
            'created_at' => now(),
        ],
        [
            'judul'   => '3 Produk Baru PT L’Essential Jawab Persoalan Kulit Perempuan Indonesia',
            'slug'    => '3-produk-baru-pt-lessential-jawab-persoalan-kulit-perempuan-indonesia',
            'isi'     => 'PT L\'Essential memastikan semua bahan yang digunakan telah tersertifikasi BPOM...',
            'gambar'  => 'artikel2.png',
            'link_asli' => 'https://www.marketeers.com/3-produk-baru-pt-lessential-jawab-persoalan-kulit-perempuan-indonesia/',
            'penulis' => 'Muhammad Perkasa Al Hafiz',
            'created_at' => now(),
        ],
        [
            'judul'   => 'Kuatkan Bisnis, Theraskin Luncurin 3 Produk Skincare Iklim Tropis',
            'slug'    => 'kuatkan-bisnis-theraskin-luncurin-3-produk-skincare-iklim-tropis/2',
            'isi'     => 'CEO PT L’Essential Lina Liputri menambahkan, sejak tahun 2013 perusahaan telah bekerjasama dengan ribuan dokter kulit dan estetika.',
            'gambar'  => 'artikel2.png',
            'link_asli' => 'https://rm.id/baca-berita/etalase-bisnis/138950/kuatkan-bisnis-theraskin-luncurin-3-produk-skincare-iklim-tropis/2',
            'penulis' => 'Fajar El Pradianto',
            'created_at' => now(),
        ]
        
    ]);
}
}
