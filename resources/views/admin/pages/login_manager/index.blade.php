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
                    <div class="table-responsive">
                        {{-- {{ $dataTable->table(['width' => '100%', 'class' => 'table table-striped overflow-y-hidden']) }} --}}
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    {{-- <th>NIM</th> --}}
                                    {{-- <th>Tahun Angkatan</th>
                                    <th>Status Login</th>
                                    <th>Jurusan</th>
                                    <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    {{-- {{ $mahasiswa->links() }} --}}
                </div>
            </div>

        </section>
    </div>
@endsection
@push('scripts')
    {{-- {{ $dataTable->scripts() }} --}}
    @stack('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- datatables --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.min.css">
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.min.js"></script>
    {{-- <script src="{{ asset('assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script> --}}
    <script>
        $(function() {
            $('#table1').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.api_login_manager') }}',
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    }
                ]
            });
        });
    </script>
@endpush
