<?php

namespace App\Http\Controllers;

use App\Models\Ujian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        $jumlahdata = Ujian::count();
        return view('admin.dashboard.dashboard', compact('jumlahdata'));
    }

    public function dashboard_peserta()
    {
        return view('peserta.dashboard');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginAuth(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            if (!Auth::User()->roles == 'user') {
                return redirect()->route('dashboard');
                return view('Admin.Dashboard.dashboard')->with('users', $request);
            }else{
                return redirect('/dashboard-peserta');
            }
        }
        return back()->withErrors([
            'password' => 'Username atau Password anda salah',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
