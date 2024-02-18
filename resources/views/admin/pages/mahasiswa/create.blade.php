@extends('admin.layouts.master')

@section('contents')
    @php
        $jurusan = ['Bisnis Digital', 'Teknik Informatika', 'Sistem Informasi'];
    @endphp
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tambah Data Mahasiswa</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Mahasiswa</li>
                            <li class="breadcrumb-item active" aria-current="page">Create</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Basic Vertical form layout section start -->
        <section id="basic-vertical-layouts">
            <div class="row match-height">
                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical" action="{{ route('admin.mahasiswa_store') }}"
                                    method="POST" enctype="multipart/form-data">
                                    <div class="form-body">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="name">Nama Lengkap</label>
                                                    <input type="text" id="name" class="form-control" name="name"
                                                        value="{{ old('name') }}" required>
                                                    @error('name')
                                                        <div class="text-danger font-bold">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" id="email" class="form-control" name="email"
                                                        value="{{ old('email') }}" required>
                                                    @error('email')
                                                        <div class="text-danger font-bold">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="nim">NIM</label>
                                                    <input type="text" id="nim" class="form-control" name="nim"
                                                        value="{{ old('nim') }}" required>
                                                    @error('nim')
                                                        <div class="text-danger font-bold">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="year">Tahun Angkatan</label>
                                                    <input type="number" id="year" class="form-control" name="year"
                                                        value="{{ old('year') }}" required>
                                                    @error('year')
                                                        <div class="text-danger font-bold">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="major">Program Studi</label>
                                                    <select name="major" id="major" class="form-control">
                                                        <option value="" selected disabled>- Pilih Program Studi -
                                                        </option>
                                                        @for ($i = 0; $i < count($jurusan); $i++)
                                                            <option value="{{ $jurusan[$i] }}">{{ $jurusan[$i] }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    @error('major')
                                                        <div class="text-danger font-bold">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" id="password" class="form-control"
                                                        name="password" value="{{ old('password') }}" required>
                                                    @error('password')
                                                        <div class="text-danger font-bold">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="password_confirmation">Confirm Password</label>
                                                    <input type="password" id="password_confirmation" class="form-control"
                                                        name="password_confirmation"
                                                        value="{{ old('password_confirmation') }}" required>
                                                    @error('password_confirmation')
                                                        <div class="text-danger font-bold">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="is_employee">Kelas karyawan ?</label>
                                                    <select name="is_employee" id="is_employee" class="form-control">
                                                        <option value="0">Bukan Kelas Karyawan</option>
                                                        <option value="1">Kelas Karyawan</option>
                                                    </select>
                                                    @error('is_employee')
                                                        <div class="text-danger font-bold">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2 justify-content-end d-flex">
                                                <a href="{{ route('admin.mahasiswa_index') }}"
                                                    class="btn btn-secondary mx-2"><i class="bi bi-arrow-left"></i>
                                                    Kembali</a>
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="bi bi-sd-card"></i>
                                                    Simpan Data</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
