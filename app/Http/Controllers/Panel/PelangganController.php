<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Panel\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\Pelanggan;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class PelangganController extends BaseController
{
    function __construct()
    {
        $this->pelanggan = new Pelanggan();
    }

    public function index()
    {
        $js_library = js_summernote();
        $css_library = css_summernote();
        $title = 'Pelanggan';
        $js = 'panel/js/apps/pelanggan/index.js?_='.rand();
        return view('panel.pelanggan.index', compact('js', 'title', 'js_library', 'css_library'));
    }

    public function datatable_pelanggan(Request $request)
    {
        $data = $this->pelanggan->dataTablePelanggan();
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

    public function store_pelanggan(Request $request)
    {
        $uid = $request->input('uid');

        $validator = Validator::make($request->all(), [
            'nama'      => 'required',
            'gambar'    => 'required_if:uid, 0'
        ]);

        if($validator->stopOnFirstFailure()->fails()){
            return $this->ajaxResponse(false, $validator->errors()->first());        
        }

        $data = [
            'nama'      => $request->nama,
            'pic'       => $request->pic,
            'alamat'    => $request->alamat,
            'deskripsi' => $request->deskripsi,
        ];

        if(!empty($uid)) {
            $data['updated_at'] = Carbon::now();
        }else{
            $data['created_at'] = Carbon::now();
        }

        // remove old file
        if(!empty($uid) && $request->file('gambar')) {
            $data_pelanggan = Pelanggan::where('id', $uid)->first();
            $oldFile = $data_pelanggan->logo;

            if(!empty($oldFile)) {
                if (Storage::disk('public')->exists($oldFile)) {
                    // Delete the file
                    Storage::disk('public')->delete($oldFile);
                }
            }
            
        }

        // upload gambar
        if($request->file('gambar')) {

            $file = $request->file('gambar');
            $fileName = $file->getClientOriginalName();
            $fileName = str_replace(' ', '', $fileName);

            // Define a file path
            $filePath = 'uploads/pelanggan/gambar/' . uniqid() . '_' . $fileName;

            // Store the file in the local storage
            $upload = Storage::disk('public')->put($filePath, file_get_contents($file));
            if ($upload) {
                $data['logo'] = $filePath;
            } 
        }

        $process = DB::table('pelanggan')->updateOrInsert(
            ['id' => $uid],
            $data
        );

        if($process) {
            return $this->ajaxResponse(true, 'Data save successfully');
        }else{
            return $this->ajaxResponse(false, 'Failed to save data');
        }
    }

    public function edit_pelanggan(Request $request) 
    {
        $uid = $request->uid;
        $data = Pelanggan::where('id', $uid)->first();
        return $this->ajaxResponse(true, 'Success!', $data);
    }

    public function delete_pelanggan(Request $request)
    {
        $uid = $request->uid;
        $process = DB::table('pelanggan')->where('id', $uid)
            ->update(['status' => 0, 'updated_at' => Carbon::now()]);

        if($process) {
            return $this->ajaxResponse(true, 'Data save successfully');
        }else{
            return $this->ajaxResponse(false, 'Failed to save data');
        }
    }

}
