<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        $artikel = DB::table('artikels')->count();
        $produk = DB::table('products')->count();
        $layanan = DB::table('services')->count();
        $kontak = DB::table('contacts')->count();

        return view(
            'admin.dashboard',
            compact(
                'artikel',
                'produk',
                'layanan',
                'kontak'
            )
        );
    }
}