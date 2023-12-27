<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});

// Auth Controller
Route::prefix('auth')->group(function ($routes) {
    $routes->get('/login', [AuthController::class, 'login'])->name('login');
    $routes->post('/auth', [AuthController::class, 'auth'])->name('auth');
    $routes->get('/logout', [AuthController::class, 'logout'])->name('logout');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
