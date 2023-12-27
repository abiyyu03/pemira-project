<?php

namespace App\Http\Controllers;

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
                return redirect()->to('/voting');
            }
        } else {
            // Alert::error('Gagal', 'NIM & Password Salah');
            return redirect()->route('login')->withInput();
        }
    }
}
