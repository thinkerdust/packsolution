<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TentangKami extends Model
{
    use HasFactory;

    protected $table = 'tentang_kami';

    public function dataTableTentangKami()
    {
        $query = DB::table('tentang_kami')->where('status', 1)->select('id', 'deskripsi', 'flag', 'status');

        return $query;
    }
}
