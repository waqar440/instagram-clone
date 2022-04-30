<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// use Auth;

class AdminController extends Controller
{
    public function showloginform(){
        return view('admin.auth.login');
    }

    public function login(Request $request){

        // $cred = $request->only('email','password');
        // dd(Auth::guard('admin')->attempt($cred));
        if(Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request->password], $request->remember)){
            return redirect('/admin');
        }

        return redirect()->back();
    }

    public function logout(){
        if(Auth::guard('admin')->logout()){
            return redirect('/login');
        }

        return redirect()->back();
    }
}
