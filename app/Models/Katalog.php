<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'katalog';

    public function dataTableKatalog() {
        $query = DB::table('katalog')->select('id', 'produk_kategori_id', 'judul', 'deskripsi', 'gambar', 'status');
        return $query;
    }
}
