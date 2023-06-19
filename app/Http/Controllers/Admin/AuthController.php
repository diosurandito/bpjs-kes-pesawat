<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
    	$this->middleware('guest:admin')->except('logout');
    }

    public function showLogin()
    {
        return view('pages.admin.auth.login');
    }

    public function login(Request $request){
        $this->validate($request,[
            'password' => 'min:1'
        ]);

        $credentials = [
            'username' => $request->username,
            'password' => $request->password,

        ];

        if (Auth::guard('admin')->attempt($credentials)){
            return redirect()->route('admin.home');
            
        }
        return redirect()->back()->withInput($request->only('username'))->with('alert','Username atau Password salah, silahkan coba lagi.');
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.showlogin');
    }
}
