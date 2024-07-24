<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Panel\BaseController as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
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
        return view('panel.auth.login', compact('js'));
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
        if(Auth::attempt($credential)){
            return $this->ajaxResponse(true, 'Sign In Successfully');
        }else{
            return $this->ajaxResponse(false, 'Incorrect username or password. Please try again');
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('admin/login');
    }

    public function change_password()
    {
        $title = 'Change Password';
        $js = 'panel/js/apps/auth/change-password.js?_='.rand();
        return view('panel.auth.change_password', compact('js','title'));
    }

    public function process_change_password(Request $request)
    {
        $validator = Validator::make($request->all(), 
            [
                'password'     => 'required|min:4|max:255',
                're_password'  => 'required|same:password',
            ]
        );

        if($validator->stopOnFirstFailure()->fails()){
            return $this->ajaxResponse(false, $validator->errors()->first());        
        }

        if(Hash::check($request->old_password, auth()->user()->password)){ 
            User::find(auth()->user()->id)->update(['password'=> bcrypt($request->password)]);
            return $this->ajaxResponse(true, 'Password save successfully');
        } 
        else{ 
            return $this->ajaxResponse(false, 'Incorrect Current Password');
        }
    }
}
