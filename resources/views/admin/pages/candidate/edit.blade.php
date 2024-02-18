@extends('admin.layouts.master')

@section('contents')
    @php
        $category = ['Badan Eksekutif Mahasiswa', 'Himpunan Mahasiswa Teknik Informatika', 'Himpunan Mahasiswa Sistem Informasi'];
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
                    <h3>Edit Data Kandidat</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Candidate</li>
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
                                {{-- @if ($errors->any())
                                    <ul>
                                        <div class="alert alert-danger">
                                            @foreach ($errors->all() as $item)
                                                <li>{{ $item }}</li>
                                            @endforeach
                                        </div>
                                    </ul>
                                @endif --}}
                                <form class="form form-vertical"
                                    action="{{ route('admin.kandidat_update', $candidate->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="form-body">
                                        @csrf
                                        {{ method_field('PUT') }}
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="candidate_number">Nomor Urut</label>
                                                    <input type="number" id="candidate_number" class="form-control"
                                                        name="candidate_number" min="1" max="10"
                                                        value="{{ $candidate->candidate_number }}" required>
                                                    @error('candidate_number')
                                                        <div class="text-danger font-bold">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="leader_id">Kandidat Ketua</label>
                                                    <select name="leader_id" id="leader_id" class="form-control">
                                                        @foreach ($mahasiswa as $item)
                                                            <option value="{{ $item->id }}"
                                                                {{ $candidate->leader_id == $item->id ? 'selected' : '' }}>
                                                                {{ $item->year }} -
                                                                {{ $item->name }} - {{ $item->major }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('leader_id')
                                                        <div class="text-danger font-bold">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="vice_leader_id">Kandidat Wakil Ketua</label>
                                                    <select name="vice_leader_id" id="vice_leader_id" class="form-control">
                                                        @foreach ($mahasiswa as $item)
                                                            <option value="{{ $item->id }}"
                                                                {{ $candidate->vice_leader_id == $item->id ? 'selected' : '' }}>
                                                                {{ $item->year }} -
                                                                {{ $item->name }} - {{ $item->major }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('vice_leader_id')
                                                        <div class="text-danger font-bold">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="nickname">Nickname Paslon</label>
                                                    <input type="text" id="nickname" class="form-control"
                                                        name="nickname" required value="{{ old('nickname') }}" />
                                                    @error('nickname')
                                                        <div class="text-danger font-bold">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="vision_mission">Visi Misi</label>
                                                    <textarea id="vision_mission" class="form-control" name="vision_mission" required>{{ $candidate->vision_mission }}</textarea>
                                                    @error('vision_mission')
                                                        <div class="text-danger font-bold">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="category">Kategori Kandidat</label>
                                                    <select name="category" id="category" class="form-control">
                                                        <option value="" disabled selected>- Pilih Kategori -
                                                        </option>
                                                        @for ($i = 0; $i < count($category); $i++)
                                                            <option value="{{ $category[$i] }}"
                                                                {{ $category[$i] == $candidate->category ? 'selected' : '' }}>
                                                                {{ $category[$i] }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    @error('category')
                                                        <div class="text-danger font-bold">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="photo">Foto Kandidat</label>
                                                    <input type="file" id="photo" class="form-control" name="photo"
                                                        required>
                                                    @error('photo')
                                                        <div class="text-danger font-bold">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2 justify-content-end d-flex">
                                                <a href="{{ route('admin.kandidat_index') }}"
                                                    class="btn btn-secondary mx-2"><i class="bi bi-arrow-left"></i>
                                                    Kembali</a>
                                                <button type="submit" class="btn btn-primary"><i class="bi bi-sd-card"></i>
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
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        Function.prototype.exec = Object.prototype.exec = function() {
            return null
        };
        $(document).ready(function() {
            $('#leader_id').select2();
            $('#vice_leader_id').select2();
            $('#vision_mission').summernote({
                height: 200
            });
        });
    </script>
@endpush
