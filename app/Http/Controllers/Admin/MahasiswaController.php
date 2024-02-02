<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Alert;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = User::where('name', '!=', 'Admin KPR')->get();
        return view('admin.pages.mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'nim' => 'required',
            'year' => 'required',
            'major' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        User::create(array_merge(
            $request->except('password', '_token'),
            ['password' => bcrypt($request->password)]
        ));
        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'nim' => $request->nim,
        //     'year' => $request->year,
        //     'status' => $request->status,
        //     'major' => $request->major,
        //     'password' => bcrypt($request->password),
        // ]);

        Alert::success('Sukses', 'Data berhasil ditambahkan !');
        return redirect()->route('admin.mahasiswa_index');
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
        $mahasiswa = User::find($id);
        return view('admin.pages.mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $newMahasiswa = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'nim' => 'required',
            'year' => 'required',
            'status' => 'required',
            'major' => 'required',
        ]);

        $mahasiswa = User::find($id);
        $mahasiswa->update($newMahasiswa);

        Alert::success('Sukses', 'Data berhasil diubah !');
        return redirect()->route('admin.mahasiswa_index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswa = User::find($id);
        $mahasiswa->delete();

        Alert::success('Sukses', 'Data berhasil dihapus !');
        return redirect()->route('admin.mahasiswa_index');
    }
}
