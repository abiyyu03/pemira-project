<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Alert;
use App\DataTables\LoginManagerDataTable;
use App\DataTables\UserDataTable;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class MahasiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:Admin']);
    }

    public function index()
    {
        $mahasiswa =  User::where('name', '!=', 'Admin KPR')->get();
        return view('admin.pages.mahasiswa.index', compact('mahasiswa'));
    }

    public function indexLoginManager(UserDataTable $dataTable)
    {
        // $user = User::where('name', '!=', 'Admin KPR')->get();
        // return DataTables::eloquent($user)->addColumn('action', 'loginmanager.action')
        //     ->editColumn('action', function ($query) {
        //         return view('components.approve_button', compact('query'));
        //         // return "<form action='" . route('admin.login_manager_approve', $query->id) . "method='POST'> " . csrf_field() . "<button type='submit' class='btn btn-success'><i class='bi bi-check'></i>Izinkan login</button></form>";
        //     })
        //     ->editColumn('allow_auth_status', function ($query) {
        //         return ($query->allow_auth_status == 1 ? '<span class="btn btn-success">Allowed</span>' : '<span class="btn btn-secondary">Need Approve</span>');
        //     })
        //     ->toJson();
        // return $dataTable->render('admin.pages.login_manager.index');

        return view('admin.pages.login_manager.index');
    }

    public function loginManagerAPI(UserDataTable $dataTable)
    {
        $user = User::where('name', '!=', 'Admin KPR')->orderBy('name', 'ASC')->get();
        // $user = DB::table('users')->where('name', '!=', 'Admin KPR');
        // dd(DataTables::of($user)->toJson(true));
        return DataTables::of($user)->make(true);
    }

    public function store(Request $request)
    {
        // Validate the request...

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
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
            ]);

            Alert::success('sukses', 'Data berhasil ditambahkan');
            return redirect()->to('/admin/mahasiswa');
        } catch (\Throwable $th) {
            // Alert::error('Gagal', 'Gagal menambahkan data');
            return redirect()->back();
        }
    }
    public function create()
    {
        return view('admin.pages.mahasiswa.create');
    }

    public function show($id)
    {
        $mahasiswa = User::find($id);
        return view('admin.pages.mahasiswa.show', compact('mahasiswa'));
    }

    public function edit($id)
    {
        $mahasiswa = User::find($id);
        return view('admin.pages.mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request...

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'nim' => 'required',
            'year' => 'required',
            'major' => 'required',
        ]);

        try {
            // Alert::success('Berhasil', ' Berhasil mengubah data');

            // Update the user

            $user = User::find($id);

            $user->name = $request->name;
            $user->email = $request->email;
            if ($request->password) {
                $user->password = Hash::make($request->password);
            }
            $user->nim = $request->nim;
            $user->year = $request->year;
            $user->major = $request->major;
            $user->is_employee = $request->is_employee;
            $user->status = $request->status;

            $user->save();
            Alert::success('sukses', 'Data berhasil diubah');
            return redirect()->to('/admin/mahasiswa');
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            // Delete the user
            User::destroy($id);

            Alert::success('sukses', 'Data berhasil dihapus');
            return redirect()->to('/admin/mahasiswa');
        } catch (\Throwable $th) {
            // Alert::error('Gagal', 'Gagal menghapus data');

            return redirect()->back();
        }
    }

    public function approve($id)
    {
        try {
            // Alert::success('Berhasil', 'Berhasil mengubah status');

            // Approve the user
            $user = User::find($id);
            $user->allow_auth_status = 1;
            $user->save();

            Alert::success('sukses', 'Akun diapprove');
            return redirect()->to('/admin/login-manager');
        } catch (\Throwable $th) {
            // Alert::error('Gagal', 'Gagal mengubah status');

            return redirect()->back();
        }
    }
}
