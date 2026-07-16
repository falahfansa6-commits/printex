<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Halaman Login
    public function index()
    {
        // Jika sudah login, langsung ke dashboard
        if (session('login')) {
            return redirect()->route('admin.dashboard');
        }

        return view('login');
    }

    // Proses Login
    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::where('username', $request->username)->first();

        if (!$admin) {
            return back()->with('error', 'Username tidak ditemukan.');
        }

        if (!Hash::check($request->password, $admin->password)) {
            return back()->with('error', 'Password salah.');
        }

        session([
            'login' => true,
            'admin' => $admin,
        ]);

        return redirect()->route('admin.dashboard');
    }

    // Dashboard
    public function dashboard()
    {
        if (!session('login')) {
            return redirect()->route('login');
        }

        return view('admin.dashboard');
    }

    // Logout
    public function logout(Request $request)
    {
        $request->session()->flush();

        return redirect()->route('login');
    }
}