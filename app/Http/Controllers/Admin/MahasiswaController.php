<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:Admin']);
    }

    public function index()
    {
        return view('admin.mahasiswa.index');
    }

    public function store(Request $request)
    {
        // Validate the request...

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'nim' => 'required|unique:users',
            'year' => 'required',
            'major' => 'required',
        ]);

        try {
            // Alert::success('Berhasil', 'Berhasil menambahkan data');

            // Store the user
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'nim' => $request->nim,
                'year' => $request->year,
                'major' => $request->major,
                'is_employee' => $request->is_employee,
                'status' => $request->status,
            ]);

            return view('admin.mahasiswa.create');
        } catch (\Throwable $th) {
            // Alert::error('Gagal', 'Gagal menambahkan data');
            return view('admin.mahasiswa.create');
        }
    }
    public function create()
    {
        return view('admin.mahasiswa.create');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('admin.mahasiswa.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.mahasiswa.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request...

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'nim' => 'required|unique:users',
            'year' => 'required',
            'major' => 'required',
        ]);

        try {
            // Alert::success('Berhasil', ' Berhasil mengubah data');

            // Update the user

            $user = User::find($id);

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->nim = $request->nim;
            $user->year = $request->year;
            $user->major = $request->major;
            $user->is_employee = $request->is_employee;
            $user->status = $request->status;

            $user->save();
        } catch (\Throwable $th) {
            // Alert::error('Gagal', 'Gagal mengubah data');

            return view('admin.mahasiswa.edit', compact('user'));
        }
    }

    public function destroy($id)
    {
        try {
            // Alert::success('Berhasil', 'Berhasil menghapus data');

            // Delete the user
            User::destroy($id);

            return view('admin.mahasiswa.index');
        } catch (\Throwable $th) {
            // Alert::error('Gagal', 'Gagal menghapus data');

            return view('admin.mahasiswa.index');
        }
    }
}
