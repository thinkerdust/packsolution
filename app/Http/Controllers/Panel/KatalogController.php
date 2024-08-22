<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Panel\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\Katalog;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class KatalogController extends BaseController
{
    function __construct()
    {
        $this->katalog = new Katalog();
    }

    public function index()
    {
        $js_library     = js_summernote();
        $css_library    = css_summernote();
        $title          = 'Katalog';
        $js             = 'panel/js/apps/katalog/index.js?_='.rand();
        return view('panel.katalog.index', compact('js', 'title', 'js_library', 'css_library'));
    }

    public function datatable_katalog(Request $request) {

        $data = $this->katalog->dataTableKatalog();
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

    public function store_katalog(Request $request) {

        $uid = $request->input('uid');

        $validator = Validator::make($request->all(), [
            'kategori_produk'   => 'required',
            'judul'             => 'required',
            'deskripsi'         => 'required',
        ]);

        if($validator->stopOnFirstFailure()->fails()){
            return $this->ajaxResponse(false, $validator->errors()->first());
        }

        $data = [
            'produk_kategori_id'    => $request->kategori_produk,
            'judul'                 => $request->judul,
            'deskripsi'             => $request->deskripsi
        ];

        if(!empty($uid)) {
            $data['updated_at'] = Carbon::now();
        }else{
            $data['created_at'] = Carbon::now();
        }

        // remove old file
        $data_katalog = Katalog::where('id', $uid)->first();

        if(!empty($uid) && $request->file('gambar')) {
            $oldFile = $data_katalog->gambar;

            if(!empty($oldFile)) {
                if (Storage::disk('public')->exists($oldFile)) {
                    // Delete the file
                    Storage::disk('public')->delete($oldFile);
                }
            }
            
        }

        if(!empty($uid) && $request->file('ukuran')) {
            $oldFile = $data_katalog->ukuran;

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
            $filePath = 'uploads/katalog/gambar/' . uniqid() . '_' . $fileName;

            // Store the file in the local storage
            $upload = Storage::disk('public')->put($filePath, file_get_contents($file));
            if ($upload) {
                $data['gambar'] = $filePath;
            } 
        }

        // upload ukuran
        if($request->file('ukuran')) {

            $file = $request->file('ukuran');
            $fileName = $file->getClientOriginalName();
            $fileName = str_replace(' ', '', $fileName);

            // Define a file path
            $filePath = 'uploads/katalog/ukuran/' . uniqid() . '_' . $fileName;

            // Store the file in the local storage
            $upload = Storage::disk('public')->put($filePath, file_get_contents($file));
            if ($upload) {
                $data['ukuran'] = $filePath;
            } 
        }

        $process = DB::table('katalog')->updateOrInsert(
            ['id' => $uid],
            $data
        );

        if($process) {
            return $this->ajaxResponse(true, 'Data save successfully');
        }else{
            return $this->ajaxResponse(false, 'Failed to save data');
        }
    }

    public function edit_katalog(Request $request) {
        $uid = $request->uid;
        $data = $this->katalog->editKatalog($uid);
        return $this->ajaxResponse(true, 'Success!', $data);
    }

    public function delete_katalog(Request $request) {
        $uid = $request->uid;
        $process = DB::table('katalog')->where('id', $uid)
            ->update(['status' => 0, 'updated_at' => Carbon::now()]);

        if($process) {
            return $this->ajaxResponse(true, 'Data save successfully');
        }else{
            return $this->ajaxResponse(false, 'Failed to save data');
        }
    }

}
