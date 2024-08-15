<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Carousel extends Model
{
    use HasFactory;

    protected $table = 'carousel';

    public function dataTableCarousel()
    {
        $query = DB::table('carousel')->where('status', 1)->select('id', 'judul', 'deskripsi', 'gambar', 'link_button', 'flag', 'status');

        return $query;
    }
}
