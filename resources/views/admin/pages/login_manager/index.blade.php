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
                    <h3>Login Manager</h3>
                    <p></p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Login Manager</li>
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
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>NIM</th>
                                <th>Tahun Angkatan</th>
                                {{-- <th>Status Voting</th> --}}
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
                                    {{-- <td>{!! $item->status == 1
                                        ? '<span class="btn btn-success">Sudah vote</span>'
                                        : '<span class="btn btn-secondary">Belum vote</span>' !!}
                                    </td> --}}
                                    <td>{{ $item->major }}</td>
                                    <td>
                                        <a href="{{ route('admin.mahasiswa_edit', $item->id) }}" class="btn btn-success"><i
                                                class="bi bi-check"></i> Izinkan login</a>
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
        // $(document).ready(function() {
        //     $('#table1').dataTable()
        // })
    </script>
@endsection
