@extends('admin.layouts.master')


@section('contents')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Mahasiswa</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mahasiswa</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div>
                        {{-- <h5 class="card-title">
                            Simple Datatable
                        </h5> --}}
                    </div>
                    <div>
                        <a href="{{ route('admin.mahasiswa_create') }}" class="btn btn-primary"><i
                                class="bi bi-plus-lg"></i>Tambah Data</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>NIM</th>
                                    <th>Tahun Angkatan</th>
                                    <th>Status Voting</th>
                                    <th>Jurusan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mahasiswa as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->nim }}</td>
                                        <td>{{ $item->year }}</td>
                                        <td>{!! $item->status == 1
                                            ? '<span class="btn btn-success">Sudah vote</span>'
                                            : '<span class="btn btn-secondary">Belum vote</span>' !!}
                                        </td>
                                        <td>{{ $item->major }}</td>
                                        <td>
                                            <a href="{{ route('admin.mahasiswa_edit', $item->id) }}"
                                                class="btn btn-warning">
                                                <i class="bi bi-pencil"></i> Edit
                                            </a>
                                            <a href="{{ route('admin.mahasiswa_delete', $item->id) }}"
                                                onclick="return confirm('Apakah kamu yakin ingin menghapus data ini ?')"
                                                class="btn btn-danger"><i class="bi bi-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table1').dataTable();
            // let table = new DataTable('#table1');
        })
    </script>
@endpush
