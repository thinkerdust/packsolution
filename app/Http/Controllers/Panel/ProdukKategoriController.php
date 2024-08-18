<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Panel\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\ProdukKategori;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ProdukKategoriController extends BaseController
{
    function __construct()
    {
        $this->produk_kategori = new ProdukKategori();
    }

    public function index()
    {
        $title = 'Produk Kategori';
        $js = 'panel/js/apps/produk-kategori/index.js?_='.rand();
        return view('panel.produk_kategori.index', compact('js', 'title'));
    }

    public function datatable_produk_kategori(Request $request)
    {
        $data = $this->produk_kategori->dataTableProdukKategori();
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

    public function store_produk_kategori(Request $request)
    {
        $uid = $request->input('uid');

        $validator = Validator::make($request->all(), [
            'nama' => 'required',
        ]);

        if($validator->stopOnFirstFailure()->fails()){
            return $this->ajaxResponse(false, $validator->errors()->first());        
        }

        $data = [
            'nama'      => $request->nama,
            'deskripsi' => $request->deskripsi
        ];

        if(!empty($uid)) {
            $data['updated_at'] = Carbon::now();
        }else{
            $data['created_at'] = Carbon::now();
        }

        // remove old file
        if(!empty($uid) && $request->file('gambar')) {
            $data_produk = ProdukKategori::where('id', $uid)->first();
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
            $filePath = 'uploads/produk-kategori/gambar/' . uniqid() . '_' . $fileName;

            // Store the file in the local storage
            $upload = Storage::disk('public')->put($filePath, file_get_contents($file));
            if ($upload) {
                $data['gambar'] = $filePath;
            } 
        }

        $process = DB::table('produk_kategori')->updateOrInsert(
            ['id' => $uid],
            $data
        );

        if($process) {
            return $this->ajaxResponse(true, 'Data save successfully');
        }else{
            return $this->ajaxResponse(false, 'Failed to save data');
        }
    }

    public function edit_produk_kategori(Request $request) 
    {
        $uid = $request->uid;
        $data = ProdukKategori::where('id', $uid)->first();
        return $this->ajaxResponse(true, 'Success!', $data);
    }

    public function delete_produk_kategori(Request $request)
    {
        $uid = $request->uid;
        $process = DB::table('produk_kategori')->where('id', $uid)
            ->update(['status' => 0, 'updated_at' => Carbon::now()]);

        if($process) {
            return $this->ajaxResponse(true, 'Data save successfully');
        }else{
            return $this->ajaxResponse(false, 'Failed to save data');
        }
    }

    public function list_data_produk_kategori(Request $request)
    {
        $q = $request->get('q');
        $data = $this->produk_kategori->listDataProdukKategori($q);
        return response()->json($data);
    }
}
