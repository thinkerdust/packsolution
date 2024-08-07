<?php 

    if(!function_exists('js_tree')){
        function js_tree() {
            return '<script src="'. asset('assets/js/libs/jstree.js?ver=3.1.0') .'"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jstreegrid/3.10.2/jstreegrid.js"
            integrity="sha512-X6Gxkg/DfpLDVkviLz0tOU9sUECOVif8FTDKX4IJi6vbCNQlqWZ2dwRvCqetOJlDzijiLWfH286XYsmBDejkwQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jstreegrid/3.10.2/jstreegrid.min.js"
            integrity="sha512-984rgpiU2asdjWnDK870ho0raSWqYVU9yAK/Uc5dPE22zZPChgf/jOEpCbM2TXRmBy6vCoCh39EWziAno1XKNQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>';
        }
    }

    if(!function_exists('css_tree')) {
        function css_tree() {
            return '<link rel="stylesheet" href="'. asset('panel/assets/css/libs/jstree.css?ver=3.1.0') .'">';
        }
    }
    
    if(!function_exists('js_summernote')) {
        function js_summernote() {
            return '<script src="'. asset('panel/assets/js/libs/editors/summernote.js?ver=3.1.0').'"></script>';
        }
    }

    if(!function_exists('css_summernote')) {
        function css_summernote() {
            return '<link rel="stylesheet" href="'. asset('panel/assets/css/editors/summernote.css?ver=3.1.0') .'">';
        }
    }

    if(!function_exists('js_datatable_button')) {
        function js_datatable_button() {
            return '<script src="'. asset('panel/assets/js/libs/datatable-btns.js') .'"></script>';
        }
    }

    if (!function_exists('validation_message')) {
        function validation_message()
        {
            $messages = [
                'required' => 'Field :attribute harus diisi',
                'unique' => 'Field :attribute sudah digunakan',
                'required_if' => 'Field :attribute harus diisi jika :other adalah :value',
                'email' => 'Field :attribute harus berupa alamat email yang valid',
                'email.rfc,dns' => 'Field :attribute harus berupa alamat email yang valid sesuai dengan standar RFC dan DNS',
                'numeric' => 'Field :attribute harus angka',
                'max' => 'Field :attribute tidak boleh lebih dari :max',
            ];

            return $messages;
        }
    }

    if (!function_exists('phone_number_format')) {
        function phone_number_format($nomor)
        {
            // Remove non-numeric characters
            $nomor_r = preg_replace('/[^0-9]+/', '', $nomor);
    
            // Handle different prefixes
            if (substr($nomor_r, 0, 1) === '0') {
                $nomor_r = substr($nomor_r, 1);
            } elseif (substr($nomor_r, 0, 2) === '62') {
                $nomor_r = substr($nomor_r, 2);
            } elseif (substr($nomor_r, 0, 3) === '+62') {
                $nomor_r = substr($nomor_r, 3);
            }
    
            // Ensure the phone number starts with '62'
            if (substr($nomor_r, 0, 2) !== '62') {
                if (substr($nomor_r, 0, 1) === '8') {
                    $nomor_fix = '62' . $nomor_r;
                } else {
                    $nomor_fix = '62' . substr($nomor_r, 2);
                }
            } else {
                $nomor_fix = $nomor_r;
            }
    
            return $nomor_fix;
        }
    }
?>