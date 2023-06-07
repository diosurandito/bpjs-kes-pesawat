<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
