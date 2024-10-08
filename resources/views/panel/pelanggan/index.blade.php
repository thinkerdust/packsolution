@extends('panel.master')

@section('content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">
                    <div class="nk-block-head nk-block-head-lg wide-sm">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">{{ $title }}</h3>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block nk-block-lg">
                        <div class="card card-bordered card-preview">
                            <div class="card-inner">

                                <a href="" onclick="tambah()" class="toggle btn btn-theme-sml btn-sm"><em class="icon ni ni-plus"></em><span>Add Data</span></a>

                                <hr class="preview-hr">
                                <table class="table table-striped nowrap" id="dt-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th> 
                                            <th>PIC</th> 
                                            <th>Logo</th> 
                                            <th>Action</th> 
                                        </tr>
                                    </thead>

                                </table>
                            </div>
                        </div><!-- .card-preview -->
                    </div> <!-- nk-block -->
                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
</div>

<!-- Modal Content Code -->
<div class="modal fade" tabindex="-1" id="modalForm">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Form Pelanggan</h5>
            </div>
            <div class="modal-body">
                <form class="form-validate is-alter" id="form-data">
                    @csrf
                    <input type="hidden" name="uid" id="uid">
                    <div class="form-group">
                        <div class="form-group">
                            <label class="form-label">Nama Pelanggan <span class="text-danger">*</span></label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Nama Pelanggan (PIC) <span class="text-danger">*</span></label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="pic" id="pic" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Alamat</label>
                            <div class="form-control-wrap">
                                <textarea class="form-control" id="alamat" name="alamat" rows="5"></textarea>
                            </div>
                        </div>
                        <label class="form-label">Deskripsi</label>
                        <div class="form-control-wrap">
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Upload Gambar Logo <span class="text-danger">*</span></label>
                        <label class="cabinet center-block">
                            <figure>
                                <img src="" class="img-responsive img-thumbnail" id="preview_image" />
                                <figcaption>
                                    <ul>
                                        <li>*)Leave blank if you don't want to replace</li>
                                        <li>*)Max size file 10 MB</li>
                                    </ul>
                                </figcaption>
                            </figure>
                            <input type="file" class="item-img file center-block" id="gambar" name="gambar" accept=".png,.jpg,.jpeg" />
                        </label>
                    </div>
                    
                    <hr class="preview-hr">
                    <button type="submit" class="btn btn-theme-sml" id="btn-submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    label.cabinet{
        display: block;
        cursor: pointer;
    }

    label.cabinet input.file{
        position: relative;
        height: 100%;
        width: auto;
        opacity: 0;
        -moz-opacity: 0;
        filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0);
        margin-top:-30px;
    }

    #preview_image {
        width: 100%;
        height: 380px;
        object-fit: contain;
    }
    
    .modal.show .select2-container {
        position: inherit !important;
    }
</style>
@endsection
