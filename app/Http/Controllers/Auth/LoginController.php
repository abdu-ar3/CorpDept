<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    public function customLogin(Request $request)
    {
        // Validasi request
        $request->validate([
            'login_type' => 'required|in:admin,department',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // Cek apakah pengguna mencoba login sebagai admin
        if ($request->input('login_type') === 'admin') {
            if (Auth::attempt($credentials)) {
                // Login sukses sebagai admin, arahkan ke halaman admin
                return redirect()->route('admin.users.index');
            } else {
                // Gagal login sebagai admin, tampilkan pesan error
                return back()->withErrors(['email' => 'Email atau password salah']);
            }
        }

        // Cek apakah pengguna mencoba login sebagai departemen
        if ($request->input('login_type') === 'department') {
            if (Auth::attempt($credentials)) {
                // Login sukses sebagai departemen, dapatkan ID departemen pengguna
                $user = Auth::user();
                $departmentId = $user->department_id;

                // Tentukan rute berdasarkan ID departemen
                $routeName = 'dept.dash'; // Gantilah dengan nama rute yang sesuai

                // Mengarahkan pengguna ke halaman departemen sesuai ID
                return redirect()->route($routeName, ['departmentId' => $departmentId]);
            } else {
                // Gagal login sebagai departemen, tampilkan pesan error
                return back()->withErrors(['email' => 'Email atau password salah']);
            }
        }

        // Jika tipe login tidak valid, tampilkan pesan error
        return back()->withErrors(['login_type' => 'Tipe login tidak valid']);
    }

}
