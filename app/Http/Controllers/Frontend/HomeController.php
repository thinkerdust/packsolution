<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index() {

        $carousel   = DB::table('carousel')->where('status', 1)->where('flag', 1)->orderBy('id', 'asc')->get();   
        $kategori   = DB::table('produk_kategori')->where('status', 1)->limit(4)->orderBy('id', 'asc')->get();
        $katalog = DB::table('katalog')
                        ->where('status', 1)
                        ->groupBy('produk_kategori_id')
                        ->orderBy('id', 'asc')
                        ->selectRaw('*, MIN(id) as min_id')
                        ->limit(3)
                        ->get();        
        // $customer   = DB::table('customer')->where('status', 1)->orderBy('id', 'asc')->get();

        $data = [
            'js'        => '<script src="'.asset('frontend/js/home.js?ver='.generateRandomString(5).'').'"></script>',
            'page'      => 'home',
            'carousel'  => $carousel,
            'kategori'  => $kategori,
            'katalog'   => $katalog,
            // 'customer'  => $customer,
        ];

        return view('frontend.home', $data);
    }

    // produk atau kategori
    public function produk() {

        $kategori   = DB::table('produk_kategori')->where('status', 1)->orderBy('id', 'asc')->get();

        $data = [
            'css'       => '<link href="'.asset('frontend/css/produk.css?ver='.generateRandomString(5).'').'" rel="stylesheet">',
            'js'        => '<script src="'.asset('frontend/js/produk.js?ver='.generateRandomString(5).'').'"></script>',
            'page'      => 'produk',
            'kategori'  => $kategori
        ];

        return view('frontend.produk', $data);
    }

    public function produkDetail($idKategori) {

        // get data kategori
        // query kategori
        $kategori   = DB::table('produk_kategori')->where('id', $idKategori)->first();
        $produk     = DB::table('produk')->where('produk_kategori_id', $idKategori)->where('status', 1)->orderBy('id', 'asc')->get();

        $data = [
            'js'        => '<script src="'.asset('frontend/js/produk-detail.js?ver='.generateRandomString(5).'').'"></script>',
            'page'      => 'produk',
            'kategori'  => $kategori,
            'produk'    => $produk
        ];

        return view('frontend.produk-detail', $data);
    }

    // portofolio atau katalog
    public function katalog() {

        $kategori   = DB::table('produk_kategori')->where('status', 1)->orderBy('id', 'asc')->get();
        $katalog    = DB::table('katalog K')
                            ->join('produk_kategori pk', 'pk.id', '=', 'k.produk_kategori_id')
                            ->select('katalog.*', 'pk.nama as kategori', DB::raw('COUNT(*) as total'))
                            ->where('status', 1)
                            ->groupBy('produk_kategori_id')
                            ->get();

        $data = [
            'css'       => '<link href="'.asset('frontend/css/katalog.css?ver='.generateRandomString(5).'').'" rel="stylesheet">',
            'js'        => '<script src="'.asset('frontend/js/katalog.js?ver='.generateRandomString(5).'').'"></script>',
            'page'      => 'katalog',
            'kategori'  => $kategori,
            'katalog'   => $katalog
        ];

        return view('frontend.katalog', $data);
    }

    // tentang kami atau about
    public function about() {

        $about = DB::table('tentang_kami')->where('status', 1)->where('flag', 1)->orderBy('id', 'asc')->first();

        $data = [
            'css'       => '<link href="'.asset('frontend/css/about.css?ver='.generateRandomString(5).'').'" rel="stylesheet">',
            'js'        => '<script src="'.asset('frontend/js/about.js?ver='.generateRandomString(5).'').'"></script>',
            'page'      => 'about',
            'about'     => $about
        ];

        return view('frontend.about', $data);
    }
}
