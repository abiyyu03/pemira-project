<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:Admin']);
    }

    public function index()
    {
        $data = Vote::with(['candidate', 'user'])->get();

        return view('admin.vote.index', compact('data'));
    }
}
