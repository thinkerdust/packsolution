<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index() {

        // $kategori   = DB::table('produk_kategori')->where('status', 1)->limit(4)->orderBy('id', 'asc')->get();
        // $katalog    = DB::table('produk_katalog')->where('status', 1)->limit(3)->orderBy('id', 'asc')->get();
        // $customer   = DB::table('customer')->where('status', 1)->orderBy('id', 'asc')->get();
        // $feedback   = DB::table('feedback')->where('status', 1)->orderBy('id', 'asc')->get();

        $data = [
            'js'        => '<script src="'.asset('frontend/js/home.js?ver='.generateRandomString(5).'').'"></script>',
            'page'      => 'home',
            // 'kategori'  => $kategori,
            // 'katalog'   => $katalog,
            // 'customer'  => $customer,
            // 'feedback'  => $feedback
        ];

        return view('frontend.home', $data);
    }

    public function produk() {

        $data = [
            'css'       => '<link href="'.asset('frontend/css/produk.css?ver='.generateRandomString(5).'').'" rel="stylesheet">',
            'js'        => '<script src="'.asset('frontend/js/produk.js?ver='.generateRandomString(5).'').'"></script>',
            'page'      => 'produk'
        ];

        return view('frontend.produk', $data);
    }

    public function produkDetail($kategori) {

        // get data kategori
        // query kategori

        $data = [
            'js'        => '<script src="'.asset('frontend/js/produk-detail.js?ver='.generateRandomString(5).'').'"></script>',
            'page'      => 'produk',
            'kategori'  => $kategori
        ];

        return view('frontend.produk-detail', $data);
    }

    public function katalog() {

        $data = [
            'css'       => '<link href="'.asset('frontend/css/katalog.css?ver='.generateRandomString(5).'').'" rel="stylesheet">',
            'js'        => '<script src="'.asset('frontend/js/katalog.js?ver='.generateRandomString(5).'').'"></script>',
            'page'      => 'katalog'
        ];

        return view('frontend.katalog', $data);
    }

    public function about() {

        $data = [
            'css'       => '<link href="'.asset('frontend/css/about.css?ver='.generateRandomString(5).'').'" rel="stylesheet">',
            'js'        => '<script src="'.asset('frontend/js/about.js?ver='.generateRandomString(5).'').'"></script>',
            'page'      => 'about'
        ];

        return view('frontend.about', $data);
    }
}
