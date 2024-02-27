<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:Admin']);
    }

    public function index()
    {
        $totalMahasiswa = User::where('name', '!=', 'Admin KPR')->count();
        $totalKandidat = Candidate::count();
        $totalSuaraMasuk = Vote::groupBy('user_id')->count(DB::raw('DISTINCT user_id'));
        $totalSisaSuara = User::where('name', '!=', 'Admin KPR')->where('status', '0')->count();
        return view('admin.pages.dashboard', compact(
            'totalMahasiswa',
            'totalKandidat',
            'totalSuaraMasuk',
            'totalSisaSuara'
        ));
    }
}
