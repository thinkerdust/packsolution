$(document).ready(function() {

    let id = $('#id_siswa').val();
    if(id) {
        $.ajax({
            url: '/master/edit-siswa/'+id,
            dataType: 'json',
            success: function(response) {
                if(response.status) {
                    let data = response.data;
                    if(data.foto) {
                        $('#preview_image').attr('src', data.foto);
                    }

                    $('#nama').val(data.nama);
                    $('#nis').val(data.nis);
                    $('#nisn').val(data.nisn);
                    $('#nik').val(data.nik);
                    $('#nohp').val(data.nohp);
                    $('#email').val(data.email);
                    $('#alamat').val(data.alamat);
                    $('#tanggal_masuk').val(data.tgl_masuk);
                    $('#tanggal_lahir').val(data.tgl_lahir);
                    $('#tempat_lahir').val(data.tempat_lahir);
                    $('#agama').val(data.agama).change();
                    $('#gender').val(data.gender).change();
                    $('#golongan_darah').val(data.gol_darah).change();
                    $('#jenis_pendaftaran').val(data.jns_pendaftaran).change();
                    $('#nama_wali').val(data.nama_wali);
                    $('#hubungan_wali').val(data.hubungan_wali);
                    $('#pendidikan_wali').val(data.pendidikan_wali);
                    $('#alamat_wali').val(data.alamat_wali);
                    $('#pekerjaan_wali').val(data.pekerjaan_wali);
                    $('#nohp_wali').val(data.nohp_wali);
                    $('#sekolah_sebelum').val(data.sekolah_sebelum);
                    $('#alamat_sekolah_sebelum').val(data.alamat_sekolah_sebelum);

                    $("#kota").empty().append(`<option value="${data.id_kota}">${data.kota}</option>`).val(data.id_kota).trigger('change');
                    $("#kota_wali").empty().append(`<option value="${data.id_kota_wali}">${data.kota_wali}</option>`).val(data.id_kota_wali).trigger('change');
                    $("#tahun_ajaran").empty().append(`<option value="${data.kode_tahun_ajaran}">${data.tahun_ajaran}</option>`).val(data.kode_tahun_ajaran).trigger('change');
                }
            },
            error: function(error) {
                console.log(error)
                NioApp.Toast('Error while fetching data', 'error', {position: 'top-right'});
            }
        })
    }
});

$('#jenis_pendaftaran').select2({
    placeholder: 'Pilih Jenis Pendaftaran',
    allowClear: true
})

$('#golongan_darah').select2({
    placeholder: 'Pilih Golongan Darah',
    allowClear: true
})

$('#gender').select2({
    placeholder: 'Pilih Gender',
    allowClear: true
})

$('#agama').select2({
    placeholder: 'Pilih Agama',
    allowClear: true
})

$('#kota').select2({
    placeholder: 'Pilih Kota',
    allowClear: true,
    ajax: {
        url: '/data-kota',
        dataType: "json",
        type: "GET",
        delay: 250,
        data: function (params) {
            return { q: params.term };
        },
        processResults: function (data, params) {
            return {
                results: $.map(data, function (item) {
                    return {
                        text: item.nama,
                        id: item.id
                    }
                })
            };
        },
        cache: true
    }
})

$('#kota_wali').select2({
    placeholder: 'Pilih Kota',
    allowClear: true,
    ajax: {
        url: '/data-kota',
        dataType: "json",
        type: "GET",
        delay: 250,
        data: function (params) {
            return { q: params.term };
        },
        processResults: function (data, params) {
            return {
                results: $.map(data, function (item) {
                    return {
                        text: item.nama,
                        id: item.id
                    }
                })
            };
        },
        cache: true
    }
})

$('#tahun_ajaran').select2({
    placeholder: 'Pilih Tahun Ajaran',
    allowClear: true,
    ajax: {
        url: '/data-tahun-ajaran',
        dataType: "json",
        type: "GET",
        delay: 250,
        data: function (params) {
            return { q: params.term };
        },
        processResults: function (data, params) {
            return {
                results: $.map(data, function (item) {
                    return {
                        text: item.nama,
                        id: item.kode
                    }
                })
            };
        },
        cache: true
    }
})

$('#preview_image').attr('src', "https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/600px-No_image_available.png");

$('#foto').on('change', function() {

    // The recommended plugin to animate custom file input: bs-custom-file-input, is what bootstrap using currently
    // bsCustomFileInput.init();

    // Set maximum filesize
    var maxSizeMb = 5;

    // Get the file by using JQuery's selector
    var file = $('#foto')[0].files[0];

    // Make sure that a file has been selected before attempting to get its size.
    if(file !== undefined) {

        // Get the filesize
        var totalSize = file.size;

        // Convert bytes into MB
        var totalSizeMb = totalSize  / Math.pow(1024,2);

        // Check to see if it is too large.
        if(totalSizeMb > maxSizeMb) {

            // Create an error message
            var errorMsg = 'File too large. Maximum file size is ' + maxSizeMb + ' MB. Selected file is ' + totalSizeMb.toFixed(2) + ' MB';
            NioApp.Toast(errorMsg, 'warning', {position: 'top-right'});

            // Clear the value
            $('#foto').val('');
            $('#preview_image').attr('src', "https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/600px-No_image_available.png");
            $('#foto').next('label').html('Choose file');
        }else{
        	readURL(this,'preview_image');
        }
    }

});

const readURL = (input,el) => {
	if (input.files && input.files[0]) {
		const reader = new FileReader()
		reader.onload = (e) => {
			$('#'+el).removeAttr('src')
			$('#'+el).attr('src', e.target.result)
		}
		reader.readAsDataURL(input.files[0])
	}
};

$('#form-data').submit(function(e) {
    e.preventDefault();
    formData = new FormData($(this)[0]);
    var btn = $('#btn-submit');

    $.ajax({
        url : "/master/store-siswa",  
        data : formData,
        type : "POST",
        dataType : "JSON",
        cache:false,
        async : true,
        contentType: false,
        processData: false,
        beforeSend: function() {
            btn.attr('disabled', true);
            btn.html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span>Loading ...</span>`);
        },
        success: function(response) {
            if(response.status){
                NioApp.Toast(response.message, 'success', {position: 'top-right'});
                setTimeout(function(){
                    window.location.href = '/master/siswa';
                }, 2000)
            }else{
                NioApp.Toast(response.message, 'warning', {position: 'top-right'});
            }
            btn.attr('disabled', false);
            btn.html('Save');
        },
        error: function(error) {
            console.log(error)
            btn.attr('disabled', false);
            btn.html('Save');
            NioApp.Toast('Error while fetching data', 'error', {position: 'top-right'});
        }
    });
});

$('.phone').keyup(function() {
    $(this).val(function (index, value) {
      return value.replace(/\D/g, "");
    });
});
