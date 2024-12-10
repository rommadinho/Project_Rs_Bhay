<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        // Jika pengguna sudah login, arahkan ke dashboard
        if (auth()->check()) {
            return redirect()->route('dashboard_pegawai'); // Ganti dengan rute yang sesuai
        }
        return view('auth.login'); // Tampilkan halaman login
    }

    // Proses login
    public function login(Request $request)
    {
        // Log saat ada upaya login
        Log::info('Login attempt for username: ' . $request->username);

        // Validasi input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Ambil kredensial
        $credentials = $request->only('username', 'password');
        
        // Coba login
        if (Auth::attempt($credentials)) {
            // Log jika login berhasil
            Log::info('Login successful for username: ' . $request->username);

            // Regenerasi session
            $request->session()->regenerate();
            return redirect()->intended('dashboard_pegawai'); // Redirect ke dashboard setelah login
        }

        // Log jika login gagal
        Log::warning('Login failed for username: ' . $request->username);

        // Jika login gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'username' => 'Username salah.',
            'password' => 'Password salah.',
        ]);
    }

    // Proses logout
    public function logout(Request $request)
    {
        // Log saat ada upaya logout
        Log::info('Logout attempt for username: ' . Auth::user()->username);

        // Lakukan logout
        Auth::logout();

        // Log setelah logout berhasil
        Log::info('Logout successful');

        // Redirect ke halaman login
        return redirect()->route('login');
    }

    // Fungsi untuk login pengguna acak
    public function randomLogin()
    {
        // Ambil pengguna secara acak
        $user = User::inRandomOrder()->first();
        if ($user) {
            // Melakukan login
            Auth::login($user);
            Log::info('Random login successful for user ID: ' . $user->id);
            return redirect()->intended('dashboard_pegawai'); // Redirect ke dashboard setelah login
        }

        // Log jika tidak ada pengguna
        Log::warning('No users available for random login.');
        return redirect()->route('login')->with('error', 'No users available.');
    }
}
