<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Faq extends Model
{
    use HasFactory;

    protected $table = 'faq';

    public function dataTableFaq() {
        $query = DB::table('faq')->select('id', 'pertanyaan', 'jawaban', 'status')->where('status', 1);
        return $query;
    }

    public function editFaq($id)
    {
        $data = DB::table('faq as f')
                    ->where(['f.status' => 1])
                    ->select('f.id', 'f.pertanyaan', 'f.jawaban', 'f.status')
                    ->where('f.id', $id)
                    ->first();

        return $data;
    }
}
