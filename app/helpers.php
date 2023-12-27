<?php

use Illuminate\Support\Facades\Auth;

function AuthHasRoles($roles): bool
{
    return in_array($roles, Auth::user()->roles->pluck('name')->toArray());
}
