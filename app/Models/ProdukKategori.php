<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProdukKategori extends Model
{
    use HasFactory;

    protected $table = 'produk_kategori';

    public function dataTableProdukKategori()
    {
        $query = DB::table('produk_kategori')->where('status', 1)->select('id', 'nama', 'status');

        return $query;
    }

    public function listDataProdukKategori($q)
    {
        $data = DB::table('produk_kategori')->where('status', 1)->select('id', 'nama');
        if($q) {
            $data = $data->where('nama', 'like', '%'.$q.'%');
        }
        return $data->get();
    }
}
