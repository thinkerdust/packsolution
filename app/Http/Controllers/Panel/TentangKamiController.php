<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Panel\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\TentangKami;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class TentangKamiController extends BaseController
{
    function __construct()
    {
        $this->tentangKami = new TentangKami();
    }

    public function index()
    {
        $js_library = js_summernote();
        $css_library = css_summernote();
        $title = 'Tentang Kami';
        $js = 'panel/js/apps/tentang_kami/index.js?_='.rand();
        return view('panel.tentang_kami.index', compact('js', 'title', 'js_library', 'css_library'));
    }

    public function datatable_tentang_kami(Request $request)
    {
        $data = $this->tentangKami->dataTableTentangKami();
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function($row) {
                
                if($row->status == 1) {

                    if($row->flag == 1) {
                        $btn_aktivasi = '<a class="btn btn-dim btn-outline-secondary btn-sm" onclick="aktivasi('.$row->id.','.$row->flag.')"><em class="icon ni ni-unlock"></em><span>Non Aktivasi</span></a>';
                    }else{
                        $btn_aktivasi = '<a class="btn btn-dim btn-outline-secondary btn-sm" onclick="aktivasi('.$row->id.','.$row->flag.')"><em class="icon ni ni-lock"></em><span>Aktivasi</span></a>';
                    }

                    $btn = '<a class="btn btn-dim btn-outline-secondary btn-sm" onclick="edit(\'' . $row->id . '\')"><em class="icon ni ni-edit"></em><span>Edit</span></a> 
                            <a class="btn btn-dim btn-outline-secondary btn-sm" onclick="hapus(\'' . $row->id . '\')"><em class="icon ni ni-trash"></em><span>Delete</span></a>
                            '.$btn_aktivasi.'
                        ';
                }else{
                    $btn = '';
                }

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store_tentang_kami(Request $request)
    {
        $uid = $request->input('uid');

        $validator = Validator::make($request->all(), [
            'deskripsi' => 'required',
        ]);

        if($validator->stopOnFirstFailure()->fails()){
            return $this->ajaxResponse(false, $validator->errors()->first());        
        }

        $data = [
            'deskripsi' => $request->deskripsi,
        ];

        if(!empty($uid)) {
            $data['updated_at'] = Carbon::now();
        }else{
            $data['created_at'] = Carbon::now();
        }

        $process = DB::table('tentang_kami')->updateOrInsert(
            ['id' => $uid],
            $data
        );

        if($process) {
            return $this->ajaxResponse(true, 'Data save successfully');
        }else{
            return $this->ajaxResponse(false, 'Failed to save data');
        }
    }

    public function edit_tentang_kami(Request $request) 
    {
        $uid = $request->uid;
        $data = TentangKami::where('id', $uid)->first();
        return $this->ajaxResponse(true, 'Success!', $data);
    }

    public function delete_tentang_kami(Request $request)
    {
        $uid = $request->uid;
        $process = DB::table('tentang_kami')->where('id', $uid)
            ->update(['status' => 0, 'updated_at' => Carbon::now()]);

        if($process) {
            return $this->ajaxResponse(true, 'Data save successfully');
        }else{
            return $this->ajaxResponse(false, 'Failed to save data');
        }
    }

    public function aktivasi_tentang_kami(Request $request)
    {
        $id = $request->id;
        $status = $request->status;

        if($status == '1') {
            $status = 0;
        }else{
            $status = 1;
        }

        $process = DB::table('tentang_kami')->where('id', $id)
            ->update(['flag' => $status, 'updated_at' => Carbon::now()]);

        if($process) {
            return $this->ajaxResponse(true, 'Data save successfully');
        }else{
            return $this->ajaxResponse(false, 'Failed to save data');
        }
    }
}
