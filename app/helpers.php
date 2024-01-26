<?php

use Illuminate\Support\Facades\Auth;

function AuthHasRoles($roles): bool
{
    return in_array($roles, Auth::user()->roles->pluck('name')->toArray());
}

function GenerateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
