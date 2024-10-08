<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{

    public function __construct() {

        // Optimize the counter queries by fetching all data in one query
        $currentYear    = date('Y');
        $currentMonth   = date('m');
        $currentDay     = date('d');

        $statistik = DB::table('counter')
                        ->selectRaw("
                            SUM(view) as totalView,
                            SUM(CASE WHEN YEAR(tanggal) = $currentYear THEN view ELSE 0 END) as counterTahun,
                            SUM(CASE WHEN YEAR(tanggal) = $currentYear AND MONTH(tanggal) = $currentMonth THEN view ELSE 0 END) as counterBulan,
                            SUM(CASE WHEN YEAR(tanggal) = $currentYear AND MONTH(tanggal) = $currentMonth AND DAY(tanggal) = $currentDay THEN view ELSE 0 END) as counterHari
                        ")
                        ->first();  

        $this->statistik = $statistik;
    }

    public function index() {

        $carousel   = DB::table('carousel')->where('status', 1)->where('flag', 1)->orderBy('id', 'asc')->get();   
        $kategori   = DB::table('produk_kategori')->where('status', 1)->limit(4)->orderBy('id', 'asc')->get();
        $katalog    = DB::table('katalog')
                        ->where('status', 1)
                        ->groupBy('produk_kategori_id')
                        ->orderBy('id', 'asc')
                        ->selectRaw('*, MIN(id) as min_id')
                        ->limit(3)
                        ->get();        
        $customer   = DB::table('pelanggan')->where('status', 1)->orderBy('id', 'asc')->get();
        $faq        = DB::table('faq')->where('status', 1)->orderBy('id', 'asc')->get();

        $data = [
            'js'            => '<script src="' . asset('frontend/js/home.js?ver=' . generateRandomString(5)) . '"></script>',
            'page'          => 'home',
            'carousel'      => $carousel,
            'kategori'      => $kategori,
            'katalog'       => $katalog,
            'customer'      => $customer,
            'faq'           => $faq,
            'statistik'     => $this->statistik
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
            'kategori'  => $kategori,
            'statistik' => $this->statistik
        ];

        return view('frontend.produk', $data);
    }

    public function produkDetail($idKategori) {

        // get data kategori
        // query kategori
        $kategori   = DB::table('produk_kategori')->where('id', $idKategori)->first();
        $produk = DB::table('produk')
                    ->select('produk.*',
                        DB::raw('CASE 
                                    WHEN produk.custom = 1 THEN "Ya" 
                                    ELSE "Tidak" 
                                END as ukuran_custom'),
                        DB::raw('CASE 
                                    WHEN produk.laminasi = 1 THEN "Glossy" 
                                    WHEN produk.laminasi = 2 THEN "Doff" 
                                    WHEN produk.laminasi = 3 THEN "Glossy/Doff" 
                                    ELSE "Tidak ada laminasi"
                                END as laminasi')
                    )
                    ->where('produk_kategori_id', $idKategori)
                    ->where('status', 1)
                    ->orderBy('id', 'asc')
                    ->get();

        $data = [
            'js'        => '<script src="'.asset('frontend/js/produk-detail.js?ver='.generateRandomString(5).'').'"></script>',
            'page'      => 'produk',
            'kategori'  => $kategori,
            'produk'    => $produk,
            'statistik' => $this->statistik
        ];

        return view('frontend.produk-detail', $data);
    }

    // portofolio atau katalog
    public function katalog() {

        $katalog    = DB::table('katalog as k')
                            ->select('k.*', 'pk.nama as kategori')
                            ->join('produk_kategori as pk', 'pk.id', '=', 'k.produk_kategori_id')
                            ->where('k.status', 1)
                            ->orderBy('k.id', 'asc')
                            ->get();

        $kategori   = DB::table('katalog as k')
                            ->join('produk_kategori as pk', 'pk.id', '=', 'k.produk_kategori_id')
                            ->select('k.produk_kategori_id', 'k.judul', 'k.deskripsi', 'k.gambar', 'k.status', 'pk.nama as kategori', DB::raw('COUNT(*) as total'))
                            ->where('k.status', 1)
                            ->groupBy('k.produk_kategori_id')
                            ->get();

        $data = [
            'css'       => '<link href="'.asset('frontend/css/katalog.css?ver='.generateRandomString(5).'').'" rel="stylesheet">',
            'js'        => '<script src="'.asset('frontend/js/katalog.js?ver='.generateRandomString(5).'').'"></script>',
            'page'      => 'katalog',
            'kategori'  => $kategori,
            'katalog'   => $katalog,
            'statistik' => $this->statistik,
            'total'     => count($katalog)
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
            'about'     => $about,
            'statistik'     => $this->statistik
        ];

        return view('frontend.about', $data);
    }
}
