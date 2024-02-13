<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;
use App\Models\User;

class VoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Vote::hasVoted(Auth::user()->id)) {
            Alert::error('Gagal', 'Anda sudah melakukan voting');
            return true;
        }
    }

    //will be called first
    public function indexBem()
    {
        if ($this->isUserAlreadyVote()) {
            return redirect()->route('home');
        }

        // Get candidates by major
        $candidates = Candidate::getCandidateByCategory(Auth::user()->major);

        return view('pages.votes.vote_bem', compact('candidates'));
    }

    //called after user voted bem
    public function indexHima()
    {
        if ($this->isUserAlreadyVote()) {
            return redirect()->route('home');
        }

        // Get candidates by major
        $candidates = Candidate::getCandidateByCategory(Auth::user()->major);

        return view('pages.votes.vote_hima', compact('candidates'));
    }

    public function readyToVote()
    {
        if ($this->isUserAlreadyVote()) {
            return redirect()->route('home');
        }

        // measuring the vote key are removed from the session
        if (request()->session()->has('vote')) {
            request()->session()->forget('vote');
        }
        return view('pages.transition_vote.ready_to_vote');
    }

    public function storeTemporaryVoteData(Request $request)
    {
        $voteId[] = $request->candidate_id;
        //if user are not vote bem yet 
        if (!$request->session()->has('vote')) {
            $request->session()->put('vote', $voteId);
            Alert::success('Berhasil', 'Berhasil votem BEM, yuk lanjut vote ketua HIMA pilihan kamu');
            return redirect()->to('/vote/hima');
        }
        $request->session()->push('vote', $request->candidate_id);
        return $this->vote($request, $request->session()->get('vote'));
    }

    public function vote(Request $request, $votesId)
    {
        // $request->validate([
        //     'candidate_id' => 'required|exists:candidates,id',
        // ]);

        if ($this->isUserAlreadyVote()) {
            return redirect()->route('home');
        }

        // Create vote
        Vote::insertVote($votesId, Auth::user()->id);

        //remove current session
        $request->session()->forget('vote');

        // Logout user
        Auth::logout();

        Alert::success('Berhasil', 'Terima kasih sudah melakukan voting');
        return redirect()->route('login');
    }
}
