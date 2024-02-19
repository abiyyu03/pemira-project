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
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur quae commodi quibusdam
                        optio non aspernatur esse ratione dolorum maiores quisquam corrupti nobis sapiente pariatur
                        ducimus deleniti dicta, deserunt molestias dolore!
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
                                name="nim" value="{{ old('nim') }}" required autocomplete="nim" autofocus>

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
                                name="password" required autocomplete="current-password">

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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
