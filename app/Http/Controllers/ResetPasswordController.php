<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    function index()
    {
        return view('register_user');
    }
    function registerUser($nim)
    {

        $pass = GenerateRandomString(8);

        $user = User::where('nim', $nim)->first();
        $user->password = Hash::make($pass);
        $user->save();

        $data = [
            'status' => 'success',
            'message' => 'User data fetched successfully',
            'code' => 200,
            'data' => $pass,
        ];
        return response($data, 200);

        return response()->json(['password' => $pass]);
    }
}
