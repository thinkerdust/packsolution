<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Panel\BaseController as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends BaseController
{
    function __construct()
    {
        $this->user = new User();
    }

    public function login()
    {
        $js = 'panel/js/apps/auth/login.js?_='.rand();
        return view('panel/auth/login', compact('js'));
    }

    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);
   
        if($validator->stopOnFirstFailure()->fails()){
            return $this->ajaxResponse(false, $validator->errors()->first());       
        }

        $credential = $request->only('username', 'password');
        $credential['status'] = 1;
        if(Auth::attempt($credential)){
            $menu = $this->menu->menu();
            $request->session()->push('menu', $menu);

            return $this->ajaxResponse(true, 'Sign In Successfully');
        }else{
            return $this->ajaxResponse(false, 'Incorrect username or password. Please try again');
        }

    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('admin/login');
    }
}
