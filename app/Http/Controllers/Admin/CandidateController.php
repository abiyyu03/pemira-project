<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Alert;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidates = Candidate::get();
        return view('admin.pages.candidate.index', compact('candidates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mahasiswa = User::where('name', '!=', 'Admin KPR')->get();
        return view('admin.pages.candidate.create', compact('mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $candidate = $request->validate([
            'candidate_number' => 'required',
            'leader_id' => 'required|unique:App\Models\Candidate,leader_id',
            'vice_leader_id' => 'required|unique:App\Models\Candidate,vice_leader_id',
            'vision_mission' => 'required ',
            'category' => 'required',
            'photo' => 'required',
        ]);

        $imageFile = $request->file('photo');
        $fileName = $imageFile->getClientOriginalName();

        $manager = new ImageManager(Driver::class);
        $image = $manager->read($imageFile);
        $image->save('img/candidate/' . $fileName);

        Candidate::create(
            array_merge($candidate, [
                'photo' => $fileName,
            ])
        );

        Alert::success('Sukses', 'Data berhasil ditambahkan !');
        return redirect()->route('admin.kandidat_index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $candidate = Candidate::find($id);
        $mahasiswa = User::where('name', '!=', 'Admin KPR')->get();
        return view('admin.pages.candidate.edit', compact('candidate', 'mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $newCandidate = $request->validate([
            'candidate_number' => 'required',
            'leader_id' => 'required',
            'vice_leader_id' => 'required',
            'vision_mission' => 'required',
            'category' => 'required',
            'photo' => 'required',
        ]);

        $imageFile = $request->file('photo');
        $fileName = $imageFile->getClientOriginalName();

        $manager = new ImageManager(Driver::class);
        $image = $manager->read($imageFile);
        $image->save('img/candidate/' . $fileName);

        $candidate = Candidate::find($id);
        $candidate->update(
            array_merge($newCandidate, [
                'photo' => $fileName,
            ])
        );

        Alert::success('Sukses', 'Data berhasil diubah !');
        return redirect()->route('admin.kandidat_index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $candidate = Candidate::find($id);
        $candidate->delete();

        Alert::success('Sukses', 'Data berhasil dihapus !');
        return redirect()->route('admin.kandidat_index');
    }
}
