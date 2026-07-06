<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthManualController extends Controller
{
    public function index(){
       return view('manual-auth.login');
    }

    public function loginProses(Request $request){
        $credentials = $request->validate([
            'email'=> 'required|email',
            'password'=>'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('index'));
        }

        return back()->withInput()->with('error', 'login gagal');
    }
}