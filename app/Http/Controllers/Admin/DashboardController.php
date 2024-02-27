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
        $totalSuaraMasuk = DB::table('votes')->select(DB::raw('count(*) as user_count, candidate_id'))->groupBy('candidate_id')->count();
        // $totalSuaraMasuk = DB::table('votes')->distinct()->get();
        // dd($totalSuaraMasuk);
        $totalSisaSuara = $totalMahasiswa - $totalSuaraMasuk;
        return view('admin.pages.dashboard', compact(
            'totalMahasiswa',
            'totalKandidat',
            'totalSuaraMasuk',
            'totalSisaSuara'
        ));
    }
}
