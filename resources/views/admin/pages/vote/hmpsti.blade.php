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
                    <h3>Hasil Vote HMPSTI</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                {{-- <div class="card-header d-flex justify-content-between">
                    <div>
                        <h5 class="card-title">
                            Simple Datatable
                        </h5>
                    </div>
                    <div>
                        <a href="" class="btn btn-primary"><i class="bi bi-plus-lg"></i>Tambah Data</a>
                    </div>
                </div> --}}
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Mahasiswa</th>
                                <th>Angkatan</th>
                                <th>Prodi</th>
                                <th>Kandidat</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hmpsti as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->user->year }}</td>
                                    <td>{{ $item->user->major }}</td>
                                    <td>{{ $item->candidate->leader->name }} & {{ $item->candidate->vice_leader->name }}
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-danger"
                                            onclick="return confirm('Apakah kamu yakin menghapus data ini ?')"><i
                                                class="bi bi-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
    <script src="{{ asset('assets/extensions/jquery/jquery.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        let table = new DataTable('#table1');
    </script>
@endsection
