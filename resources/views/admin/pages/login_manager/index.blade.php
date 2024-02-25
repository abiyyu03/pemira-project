<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/extensions/datatables-new/datatable.min.css') }}">
</head>

<body>
    <div class="page-heading">
        <div class="container mt-4">
            <div class="page-title">
                <div class="d-flex justify-content-between">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Login Manager</h3>
                            <p></p>
                        </div>
                    </div>
                    <div>
                        <p>Login as <a href="/admin" class="">{{ auth()->user()->name }}</a></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
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
                                    <table id="login-table" class="table">
                                        {!! $dataTable->table(['class' => 'table table-striped table-bordered']) !!}
                                    </table>
                                    {{-- <table class="table table-striped" id="table1">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Lengkap</th>
                                                <th>Email</th>
                                                <th>NIM</th>
                                                <th>Tahun Angkatan</th>
                                                <th>Status Login</th>
                                                <th>Jurusan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table> --}}
                                </div>
                                {{-- {{ $mahasiswa->links() }} --}}
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/extensions/datatables-new/jquery.min.js') }}"></script>
    {{-- <script src="//cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script> --}}
    <script src="//cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/extensions/datatables-new/datatable.min.js') }}"></script>
    {{ $dataTable->scripts() }}
    {{-- <script>
        $(function() {
            // $('#table1').DataTable({
            new DataTable('#table1', {
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
                    },
                    {
                        data: 'nim',
                        name: 'NIM'
                    },
                    {
                        data: 'year',
                        name: 'Tahun'
                    },
                    {
                        data: 'allow_auth_status',
                        name: 'Status Login'
                    },
                    {
                        data: 'major',
                        name: 'Jurusan'
                    }, {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ],
            });
        });
    </script> --}}
</body>

</html>
