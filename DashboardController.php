<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\CompanyProfile;
use App\Models\Galeri;
use App\Models\Product;
use App\Models\Service;

class DashboardController extends Controller
{
    public function index()
    {
        $totalArtikel = Artikel::count();
        $totalProduk  = Product::count();
        $totalLayanan = Service::count();
        $totalGaleri  = Galeri::count();
        $profilSudahDiisi = CompanyProfile::first() !== null;

        return view('admin.dashboard', compact(
            'totalArtikel',
            'totalProduk',
            'totalLayanan',
            'totalGaleri',
            'profilSudahDiisi'
        ));
    }
}
