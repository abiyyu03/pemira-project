<?php

use App\Http\Controllers\Admin\CandidateController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\Admin\VoterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('pages.auth.login');
});
Route::get('/register', function () {
    return view('pages.auth.register');
});
Route::middleware('auth')->group(function () {
    Route::get('/vote/bem', [VoteController::class, 'indexBem']);
    Route::get('/vote/hima', [VoteController::class, 'indexHima']);
    Route::get('/ready', [VoteController::class, 'readyToVote']);
    Route::post('/store_temp_vote', [VoteController::class, 'storeTemporaryVoteData'])->name('temp_vote');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('admin.mahasiswa_index');
    Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('admin.mahasiswa_create');
    Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('admin.mahasiswa_store');
    Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit'])->name('admin.mahasiswa_edit');
    Route::put('/mahasiswa/update/{id}', [MahasiswaController::class, 'update'])->name('admin.mahasiswa_update');
    Route::get('/mahasiswa/delete/{id}', [MahasiswaController::class, 'destroy'])->name('admin.mahasiswa_delete');

    Route::get('/kandidat', [CandidateController::class, 'index'])->name('admin.kandidat_index');
    Route::get('/kandidat/create', [CandidateController::class, 'create'])->name('admin.kandidat_create');
    Route::post('/kandidat/store', [CandidateController::class, 'store'])->name('admin.kandidat_store');
    Route::get('/kandidat/edit/{id}', [CandidateController::class, 'edit'])->name('admin.kandidat_edit');
    Route::put('/kandidat/update/{id}', [CandidateController::class, 'update'])->name('admin.kandidat_update');
    Route::get('/kandidat/delete/{id}', [CandidateController::class, 'destroy'])->name('admin.kandidat_delete');

    Route::get('/vote/bem', [VoterController::class, 'indexBEM'])->name('admin.voter_bem');
    Route::get('/vote/hmpsti', [VoterController::class, 'indexHMPSTI'])->name('admin.voter_hmpsti');
    Route::get('/vote/hmpssi', [VoterController::class, 'indexHMPSSI'])->name('admin.voter_hmpssi');

    Route::get('/login-manager', [MahasiswaController::class, 'indexLoginManager'])->name('admin.login_manager');
    Route::post('/login-manager/approve/{id}', [MahasiswaController::class, 'approve'])->name('admin.login_manager_approve');
    // Route::get('/vote/bem/create', [VoterController::class, 'create'])->name('admin.kandidat_create');
    // Route::post('/vote/bem/store', [VoterController::class, 'store'])->name('admin.kandidat_store');
    // Route::get('/vote/bem/edit/{id}', [VoterController::class, 'edit'])->name('admin.kandidat_edit');
    // Route::put('/vote/bem/update/{id}', [VoterController::class, 'update'])->name('admin.kandidat_update');
    // Route::get('/vote/bem/delete/{id}', [VoterController::class, 'destroy'])->name('admin.kandidat_delete');
});

// Auth Controller
Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/auth', [AuthController::class, 'auth'])->name('auth');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');