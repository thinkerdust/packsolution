<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Panel\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\Faq;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class FaqController extends BaseController
{
    function __construct()
    {
        $this->faq = new Faq();
    }

    public function index()
    {
        $js_library     = js_summernote();
        $css_library    = css_summernote();
        $title          = 'Faq';
        $js             = 'panel/js/apps/faq/index.js?_='.rand();
        return view('panel.faq.index', compact('js', 'title', 'js_library', 'css_library'));
    }

    public function datatable_faq(Request $request) {

        $data = $this->faq->dataTableFaq();
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function($row) {
                
                if($row->status == 1) {

                    $btn = '<a class="btn btn-dim btn-outline-secondary btn-sm" onclick="edit(\'' . $row->id . '\')"><em class="icon ni ni-edit"></em><span>Edit</span></a> 
                            <a class="btn btn-dim btn-outline-secondary btn-sm" onclick="hapus(\'' . $row->id . '\')"><em class="icon ni ni-trash"></em><span>Delete</span></a>
                        ';
                }else{
                    $btn = '';
                }

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store_faq(Request $request) {

        $uid = $request->input('uid');

        $validator = Validator::make($request->all(), [
            'pertanyaan'    => 'required',
            'jawaban'       => 'required',
        ]);

        if($validator->stopOnFirstFailure()->fails()){
            return $this->ajaxResponse(false, $validator->errors()->first());
        }

        $data = [
            'pertanyaan'    => $request->pertanyaan,
            'jawaban'       => $request->jawaban
        ];

        if(!empty($uid)) {
            $data['updated_at'] = Carbon::now();
        }else{
            $data['created_at'] = Carbon::now();
        }

        $process = DB::table('faq')->updateOrInsert(
            ['id' => $uid],
            $data
        );

        if($process) {
            return $this->ajaxResponse(true, 'Data save successfully');
        }else{
            return $this->ajaxResponse(false, 'Failed to save data');
        }
    }

    public function edit_faq(Request $request) {
        $uid = $request->uid;
        $data = $this->faq->editFaq($uid);
        return $this->ajaxResponse(true, 'Success!', $data);
    }

    public function delete_faq(Request $request) {
        $uid = $request->uid;
        $process = DB::table('faq')->where('id', $uid)
            ->update(['status' => 0, 'updated_at' => Carbon::now()]);

        if($process) {
            return $this->ajaxResponse(true, 'Data save successfully');
        }else{
            return $this->ajaxResponse(false, 'Failed to save data');
        }
    }

}
