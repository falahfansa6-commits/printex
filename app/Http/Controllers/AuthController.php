<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::where('username', $request->username)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {

            session([
                'login' => true,
                'admin' => $admin,
            ]);

            return redirect('/admin/dashboard');
        }

        return back()->with('error', 'Username atau Password salah');
    }

    public function dashboard()
    {
        if (!session('login')) {
            return redirect('/login');
        }

        return view('admin.dashboard');
    }

    public function logout()
    {
        session()->flush();

        return redirect('/login');
    }
}