@extends('layouts.app')

@section('content')
    <div class="container-full h-screen flex items-center bg-main">
        <div class="shadow rounded-xl mx-auto bg-background">
            <div class="sm:flex block p-8 max-w-2xl">
                <div class="mr-4 max-auto block sm:w-5/12 w-full mb-3">
                    <h2 class="text-center text-3xl font-bold text-secondary">KPR STT-NF 2024</h2>
                    <div class="">
                        <img src="{{ asset('img/logo.png') }}" alt="pemira_logo" width="170" class="mx-auto" />
                    </div>
                    <p class="text-center text-secondary">
                        PEMIRA merupakan pesta demokrasi tahunan STT Terpadu Nurul Fikri untuk memilih dan
                        menentukan Anggota DPM, Presma (Presiden Mahasiswa) - Wapresma ( Wakil Presiden Mahasiswa)
                        dan Ketua - Wakil Ketua HIMA
                    </p>
                </div>
                <div class="shadow rounded-xl p-5 bg-card items-center sm:w-7/12 w-full mb-3">
                    . <div class="my-12">
                        <h1 class="text-center text-2xl">Daftar Ulang Mahasiswa</h1>
                        <p class="text-center">Khusus untuk mahasiswa kelas karyawan</p>
                    </div>
                    <form action="{{ route('register_process') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nim">NIM</label>
                            <input type="number" class="w-full sm:w-12/12 border-2 block border-secondary p-2 rounded-lg"
                                required name="nim" id="nim" placeholder="Masukan nim kamu" />
                        </div>
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="w-full sm:w-12/12 border-2 block border-secondary p-2 rounded-lg"
                                required name="email" id="email" placeholder="Masukan email kampus kamu" />
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="p-3 bg-main text-white hover:bg-blue-400 rounded w-full">
                                Daftar !
                            </button>
                            <p class="text-center mt-3"><a href="/auth/login" class="underline">Login</a>
                            </p>
                            <hr class="my-4 border-black">
                            <p class="text-center"> <a href="/" class="underline">Kembali ke Home</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
