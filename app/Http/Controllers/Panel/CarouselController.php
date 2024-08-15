<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Panel\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\Carousel;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class CarouselController extends BaseController
{
    function __construct()
    {
        $this->carousel = new Carousel();
    }

    public function index()
    {
        $js_library = js_summernote();
        $css_library = css_summernote();
        $title = 'Carousel';
        $js = 'panel/js/apps/carousel/index.js?_='.rand();
        return view('panel.carousel.index', compact('js', 'title', 'js_library', 'css_library'));
    }

    public function datatable_carousel(Request $request)
    {
        $data = $this->carousel->dataTableCarousel();
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

    public function store_carousel(Request $request)
    {
        $uid = $request->input('uid');

        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'gambar' => 'required_if:uid, 0'
        ]);

        if($validator->stopOnFirstFailure()->fails()){
            return $this->ajaxResponse(false, $validator->errors()->first());        
        }

        $data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'link_button' => $request->link_button,
        ];

        if(!empty($uid)) {
            $data['updated_at'] = Carbon::now();
        }else{
            $data['created_at'] = Carbon::now();
        }

        // remove old file
        if(!empty($uid) && $request->file('gambar')) {
            $data_carousel = Carousel::where('id', $uid)->first();
            $oldFile = $data_carousel->gambar;

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
            $filePath = 'uploads/carousel/gambar/' . uniqid() . '_' . $fileName;

            // Store the file in the local storage
            $upload = Storage::disk('public')->put($filePath, file_get_contents($file));
            if ($upload) {
                $data['gambar'] = $filePath;
            } 
        }

        $process = DB::table('carousel')->updateOrInsert(
            ['id' => $uid],
            $data
        );

        if($process) {
            return $this->ajaxResponse(true, 'Data save successfully');
        }else{
            return $this->ajaxResponse(false, 'Failed to save data');
        }
    }

    public function edit_carousel(Request $request) 
    {
        $uid = $request->uid;
        $data = Carousel::where('id', $uid)->first();
        return $this->ajaxResponse(true, 'Success!', $data);
    }

    public function delete_carousel(Request $request)
    {
        $uid = $request->uid;
        $process = DB::table('carousel')->where('id', $uid)
            ->update(['status' => 0, 'updated_at' => Carbon::now()]);

        if($process) {
            return $this->ajaxResponse(true, 'Data save successfully');
        }else{
            return $this->ajaxResponse(false, 'Failed to save data');
        }
    }

    public function aktivasi_carousel(Request $request)
    {
        $id = $request->id;
        $status = $request->status;

        if($status == '1') {
            $status = 0;
        }else{
            $status = 1;
        }

        $process = DB::table('carousel')->where('id', $id)
            ->update(['flag' => $status, 'updated_at' => Carbon::now()]);

        if($process) {
            return $this->ajaxResponse(true, 'Data save successfully');
        }else{
            return $this->ajaxResponse(false, 'Failed to save data');
        }
    }
}
