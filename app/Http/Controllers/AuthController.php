<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Alert;

class AuthController extends Controller
{

    public function login()
    {
        if (Auth::check()) {
            return redirect()->back();
        }
        return view('auth.login');
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('/');
    }

    public function auth(Request $request)
    {
        $limitTime = strtotime("now") < strtotime($_ENV['START_LOGIN'])
            || strtotime("now") > strtotime($_ENV['END_LOGIN']);
        if ($request->nim !== $_ENV['ADMIN_NIM']) {
            if ($limitTime) {
                // Alert::error('Gagal', 'Sesi Voting ditutup');
                return redirect()->route('login');
            }
        }

        $userData = $request->only(['nim', 'password']);
        $user = User::where('nim', $request->nim)->firstOrFail();

        if ($user->allow_auth_status == 1) { // if authenticated and auth status is allowed
            if (Auth::attempt($userData)) {
                if (AuthHasRoles('Admin')) {
                    return redirect()->to('/admin');
                } else {
                    return redirect()->to('/ready');
                }
            } else {
                return redirect()->route('login')->withInput();
            }
        } else {
            Alert::error('Error', 'Silakan menghubungi admin pemira untuk mendapatkan akses');
            return redirect()->back();
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function re_register(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'email' => 'required',
        ]);

        // Check user is exist from nim and email
        $user = User::where('nim', $request->nim)->where('email', $request->email)->first();

        // Check user is employee
        if (!$user->is_employee) {
            Alert::error('Gagal', 'Anda Bukan Kelas Karyawan');
            return redirect()->route('register');
        }

        // Check user is already registered
        if ($user->status == 1) {
            Alert::error('Gagal', 'Anda Sudah Terdaftar');
            return redirect()->route('register');
        }

        // Update user status
        $user->allow_auth_status = 1;

        // Save user
        $user->save();

        // Send email
        // Mail::to($user->email)->send(new RegisterMail($user, $password));

        Alert::success('Berhasil', 'Anda Berhasil Terdaftar, silakan login dengan email dan password yang diterima di email');

        return redirect()->route('login');
    }
}
