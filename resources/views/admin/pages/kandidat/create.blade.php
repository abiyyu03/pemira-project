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
                    <h3>Tambah Data Kandidat</h3>
                    <p class="text-subtitle text-muted">A sortable, searchable, paginated table without dependencies thanks
                        to simple-datatables.</p>
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
        <!-- Basic Vertical form layout section start -->
        <section id="basic-vertical-layouts">
            <div class="row match-height">
                <div class="col-md-12 col-12">
                    <div class="card">
                        {{-- <div class="card-header d-flex justify-content-between">
                            <div>
                                <h5 class="card-title">
                                    Simple Datatable
                                </h5>
                            </div>
                            <div>
                                <a href="" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Kembali</a>
                                <a href="" class="btn btn-success"><i class="bi bi-sd-card"></i> Simpan Data</a>
                            </div>
                        </div> --}}
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical">
                                    <div class="form-body">
                                        <form action="" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">First Name</label>
                                                        <input type="text" id="first-name-vertical" class="form-control"
                                                            name="fname" placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="email-id-vertical">Email</label>
                                                        <input type="email" id="email-id-vertical" class="form-control"
                                                            name="email-id" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="contact-info-vertical">Mobile</label>
                                                        <input type="number" id="contact-info-vertical"
                                                            class="form-control" name="contact" placeholder="Mobile">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="password-vertical">Password</label>
                                                            <input type="password" id="password-vertical" class="form-control"
                                                                name="contact" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-2 justify-content-end d-flex">
                                                    <a href="" class="btn btn-secondary mx-2"><i
                                                            class="bi bi-arrow-left"></i>
                                                        Kembali</a>
                                                    <button type="submit" class="btn btn-primary"><i
                                                            class="bi bi-sd-card"></i> Simpan Data</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic Vertical form layout section end -->
    @endsection
