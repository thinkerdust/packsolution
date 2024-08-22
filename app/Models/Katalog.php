<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Katalog extends Model
{
    use HasFactory;

    protected $table = 'katalog';

    public function dataTableKatalog() {
        $query = DB::table('katalog')->select('id', 'produk_kategori_id', 'judul', 'deskripsi', 'gambar', 'ukuran', 'status');
        return $query;
    }

    public function editKatalog($id)
    {
        $data = DB::table('katalog as k')
                    ->join('produk_kategori as pk', 'k.produk_kategori_id', '=', 'pk.id')
                    ->where([['k.status', 1], ['pk.status', 1], ['k.id', $id]])
                    ->select('k.id', 'k.produk_kategori_id', 'k.judul', 'k.status', 'pk.nama as kategori', 'k.gambar', 'k.ukuran', 'k.deskripsi')
                    ->first();

        return $data;
    }
}
