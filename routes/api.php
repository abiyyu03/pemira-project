<?php

use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\ResetPasswordController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Yajra\DataTables\Facades\DataTables;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/login-manager', function () {
    $user = User::where('name', '!=', 'Admin KPR')->orderBy('name', 'ASC')->get();
    return DataTables::of($user)
        ->toJson();
})->name('admin.api_login_manager');
Route::get('/registrasi_user/{nim}', [ResetPasswordController::class, 'registerUser'])->name('regis.store');
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
