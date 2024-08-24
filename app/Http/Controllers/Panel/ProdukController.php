<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Panel\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\Produk;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ProdukController extends BaseController
{
    function __construct()
    {
        $this->produk = new Produk();
    }

    public function index()
    {
        $js_library = js_summernote();
        $css_library = css_summernote();
        $title = 'Produk';
        $js = 'panel/js/apps/produk/index.js?_='.rand();
        return view('panel.produk.index', compact('js', 'title', 'js_library', 'css_library'));
    }

    public function datatable_produk(Request $request)
    {
        $data = $this->produk->dataTableProduk();
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

    public function store_produk(Request $request)
    {
        $uid = $request->input('uid');

        $validator = Validator::make($request->all(), [
            'kategori_produk'   => 'required',
            'kategori_judul'    => 'required',
            'judul'             => 'required',
            'deskripsi'         => 'required',
            'warna'             => 'required',
            'ukuran_custom'     => 'required',
            'laminasi'          => 'required'
        ]);

        if($validator->stopOnFirstFailure()->fails()){
            return $this->ajaxResponse(false, $validator->errors()->first());        
        }

        $data = [
            'produk_kategori_id'    => $request->kategori_produk,
            'kategori_judul'        => $request->kategori_judul,
            'judul'                 => $request->judul,
            'deskripsi'             => $request->deskripsi,
            'warna'                 => $request->warna,
            'custom'                => $request->ukuran_custom,
            'laminasi'              => $request->laminasi
        ];

        if(!empty($uid)) {
            $data['updated_at'] = Carbon::now();
        }else{
            $data['created_at'] = Carbon::now();
        }

        // remove old file gambar
        if(!empty($uid) && $request->file('gambar') ) {
            $data_produk = Produk::where('id', $uid)->first();
            $oldFile = $data_produk->gambar;

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
            $filePath = 'uploads/produk/gambar/' . uniqid() . '_' . $fileName;

            // Store the file in the local storage
            $upload = Storage::disk('public')->put($filePath, file_get_contents($file));
            if ($upload) {
                $data['gambar'] = $filePath;
            } 
        }

        // remove old file ukuran
        if(!empty($uid) && $request->file('gambar_ukuran') ) {
            $data_produk = Produk::where('id', $uid)->first();
            $oldFile = $data_produk->ukuran;

            if(!empty($oldFile)) {
                if (Storage::disk('public')->exists($oldFile)) {
                    // Delete the file
                    Storage::disk('public')->delete($oldFile);
                }
            }
        }

        // upload ukuran
        if($request->file('gambar_ukuran')) {

            $file = $request->file('gambar_ukuran');
            $fileName = $file->getClientOriginalName();
            $fileName = str_replace(' ', '', $fileName);

            // Define a file path
            $filePath = 'uploads/produk/ukuran/' . uniqid() . '_' . $fileName;

            // Store the file in the local storage
            $upload = Storage::disk('public')->put($filePath, file_get_contents($file));
            if ($upload) {
                $data['ukuran'] = $filePath;
            } 
        }

        $process = DB::table('produk')->updateOrInsert(
            ['id' => $uid],
            $data
        );

        if($process) {
            return $this->ajaxResponse(true, 'Data save successfully');
        }else{
            return $this->ajaxResponse(false, 'Failed to save data');
        }
    }

    public function edit_produk(Request $request) 
    {
        $uid = $request->uid;
        $data = $this->produk->editProduk($uid);
        return $this->ajaxResponse(true, 'Success!', $data);
    }

    public function delete_produk(Request $request)
    {
        $uid = $request->uid;
        $process = DB::table('produk')->where('id', $uid)
            ->update(['status' => 0, 'updated_at' => Carbon::now()]);

        if($process) {
            return $this->ajaxResponse(true, 'Data save successfully');
        }else{
            return $this->ajaxResponse(false, 'Failed to save data');
        }
    }
}
