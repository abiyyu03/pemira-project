<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\User;
use Illuminate\Http\Request;
use Alert;

class CandidateController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth', 'role:Admin']);
    // }

    public function index()
    {
        $candidates = Candidate::all();
        return view('admin.pages.candidate.index', compact('candidates'));
    }

    public function create()
    {
        $mahasiswa = User::where('name', '!=', 'Admin KPR')->get();

        return view('admin.pages.candidate.create', compact('mahasiswa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'candidate_number' => 'required',
            'nickname' => 'required',
            'leader_id' => 'required',
            'vice_leader_id' => 'required',
            'vision_mission' => 'required',
            'category' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        try {
            $photo = $request->file('photo');
            $photo_name = time() . '.' . $photo->extension();
            $photo->move(public_path('images'), $photo_name);

            Candidate::create([
                'candidate_number' => $request->candidate_number,
                'nickname' => $request->nickname,
                'leader_id' => $request->leader_id,
                'vice_leader_id' => $request->vice_leader_id,
                'vision_mission' => $request->vision_mission,
                'category' => $request->category,
                'photo' => $photo_name,
            ]);

            Alert::success('Berhasil', 'Berhasil menambahkan data');
            return redirect()->to('/admin/kandidat');
        } catch (\Throwable $th) {
            // Alert::error('Gagal', 'Gagal menambahkan data');
            return redirect()->back();
        }
    }

    public function show($id)
    {
        $candidate = Candidate::find($id);

        return view('admin.pages.candidate.show', compact('candidate'));
    }

    public function edit($id)
    {
        $candidate = Candidate::find($id);
        $mahasiswa = User::where('name', '!=', 'Admin KPR')->get();

        return view('admin.pages.candidate.edit', compact('candidate', 'mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'candidate_number' => 'required',
            'nickname' => 'required',
            'leader_id' => 'required',
            'vice_leader_id' => 'required',
            'vision_mission' => 'required',
            'category' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            // Save data
            $candidate = Candidate::find($id);

            $candidate->candidate_number = $request->candidate_number;
            $candidate->nickname = $request->nickname;
            $candidate->leader_id = $request->leader_id;
            $candidate->vice_leader_id = $request->vice_leader_id;
            $candidate->vision_mission = $request->vision_mission;
            $candidate->category = $request->category;

            if ($request->hasFile('photo')) {
                $old_photo = public_path('images/candidate/' . $candidate->photo);

                // Remove old photo
                if (file_exists($old_photo)) {
                    unlink($old_photo);
                }

                // Save photo
                $photo = $request->file('photo');
                $photo_name = time() . '.' . $photo->extension();
                $photo->move(public_path('images/candidate'), $photo_name);

                $candidate->photo = $photo_name;
            }

            $candidate->save();

            Alert::success('Berhasil', 'Berhasil mengubah data');
            return redirect()->to('/admin/kandidat');
        } catch (\Throwable $th) {
            // Alert::error('Gagal', 'Gagal mengubah data');
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        try {
            Candidate::find($id)->delete();

            // Alert::success('Berhasil', 'Berhasil menghapus data');
            return back();
        } catch (\Throwable $th) {
            //throw $th;
            // Alert::error('Gagal', 'Gagal menghapus data');
            return back();
        }
    }
}
