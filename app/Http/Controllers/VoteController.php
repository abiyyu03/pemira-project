<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    public function index()
    {
        // Check if user has voted
        if (Vote::hasVoted(Auth::user()->id)) {
            // Alert::error('Gagal', 'Anda sudah melakukan voting');
            return redirect()->route('home');
        }

        // Get candidates by major
        $candidates = Candidate::getCandidateByCategory(Auth::user()->major);

        return view('vote.index', compact('candidates'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'candidate_id' => 'required|exists:candidates,id',
        ]);


        // Check if user has voted
        if (Vote::hasVoted(Auth::user()->id)) {
            // Alert::error('Gagal', 'Anda sudah melakukan voting');
            return redirect()->route('home');
        }

        // Create vote
        Vote::insertVote($request->candidate_id, Auth::user()->id);

        // Logout user
        Auth::logout();

        // Alert::success('Berhasil', 'Berhasil melakukan voting');
        return redirect()->route('login');
    }
}
