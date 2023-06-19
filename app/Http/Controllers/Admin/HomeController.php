<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('pages.admin.home');
    }

    public function editProfile(Request $request)
    {
        $oldPwd = $request->confirm_password;
        $newPwd = $request->new_password; 
        $newUsn = $request->new_username;

        #Match The Old Password
        if(!Hash::check($oldPwd, auth()->user()->password)){
            return response()->json(['failed_edit' => 'Password lama yang Anda masukkan salah.']);
        }
        
   
        if (!empty($newUsn) && empty($newPwd)) {
            Auth::user()->update([
                'username' => $newUsn
            ]);

            return response()->json(['success_edit' => 'Username berhasil diubah.', 'new_username' => $newUsn]);
        }

        if (empty($newUsn) && !empty($newPwd)) {
            Auth::user('dealer')->update([
                'password' => Hash::make($newPwd)
            ]);

            return response()->json(['success_edit' => 'Password berhasil diubah.']);
        }

        Auth::user('dealer')->update([
            'username' => $newUsn,
            'password' => Hash::make($newPwd)
        ]);

        return response()->json(['success_edit' => 'Username & password berhasil diubah.', 'new_username' => $newUsn]);
    
        
    }
}
