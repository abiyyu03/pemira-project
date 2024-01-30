<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function login()
    {
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
        $limitTime = strtotime("now") < strtotime($_ENV['START_LOGIN']) || strtotime("now") > strtotime($_ENV['END_LOGIN']);
        if ($request->nim !== $_ENV['ADMIN_NIM']) {
            if ($limitTime) {
                // Alert::error('Gagal', 'Sesi Voting ditutup');
                return redirect()->route('login');
            }
        }

        $userData = $request->only(['nim', 'password']);
        if (Auth::attempt($userData)) {
            if (AuthHasRoles('Admin')) {
                return redirect()->to('/admin');
            } else {
                return redirect()->to('/ready');
            }
        } else {
            // Alert::error('Gagal', 'NIM & Password Salah');
            return redirect()->route('login')->withInput();
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function re_register(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:users',
            'email' => 'required|unique:users',
        ]);

        // Check user is exist from nim and email
        $user = User::where('nim', $request->nim)->where('email', $request->email)->first();

        // Check user is employee
        if (!$user->is_employee) {
            // Alert::error('Gagal', 'Anda Bukan Kelas Karyawan');
            return redirect()->route('register');
        }

        // Check user is already registered
        if ($user->status == 1) {
            // Alert::error('Gagal', 'Anda Sudah Terdaftar');
            return redirect()->route('register');
        }

        // Generate password
        $password = generateRandomString(8);

        // Update user status
        $user->status = 1;
        $user->password = Auth::hash($password);

        // Save user
        $user->save();

        // Send email
        // Mail::to($user->email)->send(new RegisterMail($user, $password));

        // Alert::success('Berhasil', 'Anda Berhasil Terdaftar');

        return redirect()->route('login');
    }
}
