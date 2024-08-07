<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    public function dataTableProduk()
    {
        $query = DB::table('produk as p')
                    ->join('produk_kategori as pk', 'p.produk_kategori_id', '=', 'pk.id')
                    ->where([['p.status', 1], ['pk.status', 1]])
                    ->select('p.id', 'p.produk_kategori_id', 'p.judul', 'p.status', 'pk.nama as kategori');

        return $query;
    }

    public function editProduk($id)
    {
        $data = DB::table('produk as p')
                    ->join('produk_kategori as pk', 'p.produk_kategori_id', '=', 'pk.id')
                    ->where([['p.status', 1], ['pk.status', 1], ['p.id', $id]])
                    ->select('p.id', 'p.produk_kategori_id', 'p.judul', 'p.status', 'pk.nama as kategori', 'p.gambar', 'p.deskripsi')
                    ->first();

        return $data;
    }
}
