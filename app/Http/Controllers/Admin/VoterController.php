<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vote;
use Illuminate\Http\Request;
use Alert;

class VoterController extends Controller
{
    public function indexBEM()
    { 
        $bem = Vote::getVoterData('bem');
        return view('admin.pages.vote.bem', compact('bem'));
    }
    public function indexHMPSTI()
    { 
        $hmpsti = Vote::getVoterData('hmpsti');
        return view('admin.pages.vote.hmpsti', compact('hmpsti'));
    }
    public function indexHMPSSI()
    { 
        $hmpssi = Vote::getVoterData('hmpssi');
        return view('admin.pages.vote.hmpssi', compact('hmpssi'));
    }

    public function delete($id)
    {
        Vote::find($id)->destroy();
        Alert::success('Sukses', 'Data Vote berhasil dihapus');
        return redirect()->back();
    }
}