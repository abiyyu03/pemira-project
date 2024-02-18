<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalMahasiswa = User::where('name', '!=', 'Admin KPR')->count();
        $totalKandidat = Candidate::count();
        return view('admin.pages.dashboard', compact('totalMahasiswa', 'totalKandidat'));
    }
}
