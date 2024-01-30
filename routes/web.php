<?php

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
    Route::get('/', function () {
        return view('admin.pages.dashboard');
    })->name('admin.dashboard');

    Route::get('/vote', function () {
        return view('admin.pages.vote.index');
    })->name('admin.vote_index');

    Route::get('/mahasiswa', function () {
        return view('admin.pages.mahasiswa.index');
    })->name('admin.mahasiswa_index');

    Route::get('/kandidat', function () {
        return view('admin.pages.kandidat.index');
    })->name('admin.kandidat_index');

    Route::get('/kandidat/create', function () {
        return view('admin.pages.kandidat.create');
    })->name('admin.kandidat_create');
});

// Auth Controller
Route::prefix('auth')->group(function ($routes) {
    $routes->get('/login', [AuthController::class, 'login'])->name('login');
    $routes->post('/auth', [AuthController::class, 'auth'])->name('auth');
    $routes->get('/logout', [AuthController::class, 'logout'])->name('logout');
});



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
