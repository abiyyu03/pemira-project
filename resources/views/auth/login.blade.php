@extends('layouts.app')

@section('content')
    <div class="container-full h-screen flex items-center bg-main">
        <div class="shadow rounded-xl mx-auto bg-background">
            <div class="sm:flex block p-8 max-w-2xl">
                <div class="mr-4 max-auto block sm:w-6/12 w-full mb-3">
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
                <div class="shadow rounded-xl p-5 bg-card items-center sm:w-6/12 w-full mb-3">
                    <h1 class="text-center text-2xl mt-10">Login</h1>
                    <form method="POST" action="{{ route('auth') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="nim">NIM</label>
                            <input id="nim" type="nim"
                                class="w-full sm:w-12/12 border-2 block border-secondary p-2 rounded-lg @error('nim') is-invalid @enderror"
                                name="nim" value="{{ old('nim') }}" required autocomplete="nim" autofocus
                                placeholder="masukan nim kamu">

                            @error('nim')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input id="password" type="password"
                                class="w-full sm:w-12/12 border-2 block border-secondary p-2 rounded-lg @error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password"
                                placeholder="password dilihat di email">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="p-3 bg-main text-white hover:bg-blue-400 rounded w-full">
                                Login
                            </button>
                            <p class="text-center mt-3">Apakah kamu kelas karyawan ?, <a href="/auth/karyawan/register"
                                    class="underline">registrasi ulang disini</a></p>
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
