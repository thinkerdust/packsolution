<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';

    public function dataTablePelanggan()
    {
        $query = DB::table('pelanggan')->select('id', 'nama', 'alamat', 'deskripsi', 'logo', 'status');

        return $query;
    }
}
