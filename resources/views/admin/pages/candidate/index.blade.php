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
                    <h3>Data Kandidat</h3>
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
                <div class="card-header d-flex justify-content-between">
                    <div>
                        {{-- <h5 class="card-title">
                            Simple Datatable
                        </h5> --}}
                    </div>
                    <div>
                        <a href="{{ route('admin.kandidat_create') }}" class="btn btn-primary"><i
                                class="bi bi-plus-lg"></i>Tambah Data</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Ketua</th>
                                <th>Wakil Ketua</th>
                                {{-- <th>Visi & Misi</th> --}}
                                <th>Kategori</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($candidates as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->leader->name }}</td>
                                    <td>{{ $item->vice_leader->name }}</td>
                                    {{-- <td>{{ $item->vision_mission }}</td> --}}
                                    <td>{{ $item->category }}</td>
                                    <td>
                                        <a href="{{ route('admin.kandidat_edit', $item->id) }}" class="btn btn-warning"><i
                                                class="bi bi-pencil"></i> Edit</a>
                                        <a href="{{ route('admin.kandidat_delete', $item->id) }}"
                                            onclick="return confirm('Apakah kamu yakin ingin menghapus data ini ?')"
                                            class="btn btn-danger"><i class="bi bi-trash"></i> Hapus</a>
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
