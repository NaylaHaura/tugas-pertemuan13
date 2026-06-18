<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CompanyProfile;
use App\Models\Galeri;

class CompanyController extends Controller
{
    public function home()
    {
        return view('pages.home'); 
    }

    public function about()
    {
        $profil = CompanyProfile::first();
        return view('pages.about', compact('profil'));
    }

    public function galeri()
    {
        $semua_galeri = Galeri::latest()->get();
        return view('pages.galeri', compact('semua_galeri'));
    }

    public function services()
    {
        $data_layanan = DB::table('services')->get(); 
        return view('pages.services', compact('data_layanan'));
    }
    public function products()
    {
        $data_produk = DB::table('products')->get(); 
        return view('pages.products', compact('data_produk'));
    }
    public function artikel()
    {
        $semua_artikel = \DB::table('artikels')->get();
        return view('pages.artikel', compact('semua_artikel'));
    }

    public function detailArtikel($slug)
    {
    $artikel = \DB::table('artikels')->where('slug', $slug)->first();
    
    if (!$artikel) { 
        abort(404); 
    }
    return view('pages.detail_artikel', compact('artikel'));
    }

   public function contact()
    {
    $kontak = \DB::table('contacts')->get();
    return view('pages.contact', compact('kontak'));
    }
}