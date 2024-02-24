<!DOCTYPE html>
<html style="scroll-behavior: smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>#yukVote | Pemilihan Raya STTNF 2024</title>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/daisyui@4.5.0/dist/full.min.css" rel="stylesheet" type="text/css" /> --}}
    <style>
        #preload-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            opacity: 1;
            transition: opacity 0.5s ease-out;
            /* Add a fade-out transition */
        }

        .loader {
            border: 8px solid #ffffff;
            border-top: 8px solid #425485;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .fade-out {
            opacity: 0 !important;
        }
    </style>
</head>

<body style="background-image: url('/img/decor/large-triangles-white.svg')">
    <html data-theme="cupcake">

    </html>
    <div id="preload-container">
        <div class="loader"></div>
        <!-- <h1 class="text-2xl font-bold ml-2 text-secondary">Tunggu yak</h1> -->
    </div>
    <div class="container-full">
        <div class="navbar bg-base-100 sticky top-0 w-full z-20">
            <div class="navbar-start w-4/12">
                <a href="#hero">
                    <img src="img/logo.png" alt="" class="w-20" />
                </a>
            </div>
            <div class="navbar-end w-8/12 flex justify-end">
                <div class="dropdown">
                    <ul tabindex="0"
                        class="menu menu-md dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-56 right-0 text-end">
                        <li class="h-full">
                            <a href="#hero"
                                class="text-xl text-secondary hover:underline transition delay-100">Welcome</a>
                        </li>
                        <li class="h-full">
                            <a href="#tutorial"
                                class="text-xl text-secondary hover:underline transition delay-100">Tutorial</a>
                        </li>
                        <li class="h-full">
                            <a href="#kandidat"
                                class="text-xl text-secondary hover:underline transition delay-100">Kandidat</a>
                        </li>
                        <li class="h-full">
                            <a href="#live_count"
                                class="text-xl text-secondary hover:underline transition delay-100">Live Count</a>
                        </li>
                        <li class="h-full">
                            <a href="#sk"
                                class="text-xl text-secondary hover:underline transition delay-100">Ketentuan</a>
                        </li>
                        <li class="h-full">
                            <a href="#siap_vote"
                                class="text-xl text-secondary hover:underline transition delay-100">Siap Vote</a>
                        </li>
                    </ul>
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden align-end">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </div>
                </div>
                <div class="hidden lg:flex items-center">
                    <ul class="menu menu-horizontal px-1">
                        <li class="h-full">
                            <a href="#hero"
                                class="text-xl text-secondary hover:underline transition delay-100">Welcome</a>
                        </li>
                        <li class="h-full">
                            <a href="#tutorial"
                                class="text-xl text-secondary hover:underline transition delay-100">Tutorial</a>
                        </li>
                        <li class="h-full">
                            <a href="#kandidat"
                                class="text-xl text-secondary hover:underline transition delay-100">Kandidat</a>
                        </li>
                        <li class="h-full">
                            <a href="#live_count"
                                class="text-xl text-secondary hover:underline transition delay-100">Live Count</a>
                        </li>
                        <li class="h-full">
                            <a href="#sk"
                                class="text-xl text-secondary hover:underline transition delay-100">Ketentuan</a>
                        </li>
                        <li class="h-full">
                            <a href="#siap_vote"
                                class="text-xl text-secondary hover:underline transition delay-100">Siap Vote</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- hero -->
        <section class="p-5 bg-secondary" style="background-image: url('img/decor/large-triangles.svg')" id="hero">
            <div class="text-center xl:w-8/12 md:w-full w-full mx-auto h-screen flex items-center justify-center">
                <div class="mx-8 my-auto">
                    <h2 class="text-white text-4xl font-bold mb-6 sm:text-5xl">SELAMAT DATANG DI PEMIRA 2024</h2>
                    <p class="text-white text-lg sm:w-lg mb-10 w-full">
                        PEMIRA merupakan pesta demokrasi tahunan STT Terpadu Nurul Fikri untuk memilih dan
                        menentukan Anggota DPM, Presma (Presiden Mahasiswa) - Wapresma ( Wakil Presiden Mahasiswa)
                        dan Ketua - Wakil Ketua HIMA
                    </p>
                    <a href="#tutorial" class="bg-white text-secondary p-5 rounded-lg">
                        Mulai Jelajah <i class="fas fa-arrow-down"></i>
                    </a>
                </div>
            </div>
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#363062" fill-opacity="1"
                d="M0,160L80,176C160,192,320,224,480,218.7C640,213,800,171,960,165.3C1120,160,1280,192,1360,208L1440,224L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
            </path>
        </svg>

        <!-- tutorial voting -->
        <section class="my-12" id="tutorial">
            <div class="mb-12">
                <h2 class="text-secondary text-3xl sm:text-4xl font-bold text-center">Tutorial Voting</h2>
                <hr class="border-b-4 border-secondary max-w-40 mx-auto mt-4" />
            </div>
            <div class="mx-auto">
                ><iframe class="mx-auto sm:w-8/12 w-96" height="640"
                    src="https://www.youtube-nocookie.com/embed/mUzI86asVEY?si=RudYRKvkf7sLN7vK"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <div class="text-center">
                    <a href="#" target="_blank">
                        <h2 class="mt-4 font-bold bg-secondary w-fit p-3 text-center text-white mx-auto rounded">
                            <i class="fab fa-youtube"></i>
                            Tonton di Youtube
                        </h2>
                    </a>
                </div>
            </div>
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#363062" fill-opacity="1"
                d="M0,160L80,176C160,192,320,224,480,218.7C640,213,800,171,960,165.3C1120,160,1280,192,1360,208L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#363062" fill-opacity="1"
                d="M0,160L80,176C160,192,320,224,480,218.7C640,213,800,171,960,165.3C1120,160,1280,192,1360,208L1440,224L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
            </path>
        </svg>

        <!-- Calon Kandidat -->
        <section id="kandidat">
            <h2 class="text-secondary text-3xl sm:text-4xl font-bold text-center mt-8">Calon Kandidat</h2>
            <hr class="border-b-4 border-secondary max-w-40 mx-auto mt-4 mb-10" />
            <!-- <h2 class="text-secondary text-2xl mb-6 mt-8 text-center">Presma dan Wapresma</h2> -->
            <div class="">
                <div class="sm:flex block justify-center">
                    <!-- bem -->
                    @foreach ($kandidat as $item)
                        <div class="text-center bg-background w-fit mx-4 p-4 rounded-xl shadow-lg pb-8 mb-7">
                            <h1
                                class="my-1 text-2xl text-background font-bold bg-secondary w-fit mx-auto p-2 rounded-xl">
                                @if ($item->category == 'Badan Eksekutif Mahasiswa')
                                    {{ 'BEM' }}
                                @elseif ($item->category == 'Himpunan Mahasiswa Teknik Informatika')
                                    {{ 'HMPSTI' }}
                                @elseif ($item->category == 'Himpunan Mahasiswa Sistem Informasi')
                                    {{ 'HMPSSI' }}
                                @endif
                            </h1>
                            <div class="flex mb-2 justify-center">
                                <div
                                    class="rounded-xl p-6 text-center transition ease-in-out delay-100 hover:scale-105">
                                    <img src="{{ asset('img/candidate/' . $item->photo) }}" alt=""
                                        class="w-full sm:w-72" class="mx-auto" />
                                    <h1 class="mt-6 mb-1 text-3xl text-secondary">{{ $item->nickname }}</h1>
                                    <dialog id="my_modal_{{ $item->id }}" class="modal">
                                        <div class="modal-box">
                                            <form method="dialog">
                                                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">
                                                    ✕
                                                </button>
                                            </form>
                                            <h3 class="font-bold text-lg mb-4">Cek Visi & Misi beliau</h3>
                                            <p class="py-3">{!! $item->vision_mission !!}</p>
                                        </div>
                                    </dialog>
                                </div>
                            </div>
                            <button type="button" class="bg-blue-500 text-white p-3 rounded-lg"
                                onclick="my_modal_{{ $item->id }}.showModal()">
                                Visi dan Misi
                            </button>
                        </div>
                    @endforeach
                    <!-- hmpssi -->
                    {{-- <div class="text-center bg-background w-fit mx-4 p-4 rounded-xl shadow-lg pb-8 mb-7">
                        <h1 class="my-1 text-2xl text-background font-bold bg-secondary w-fit mx-auto p-2 rounded-xl">
                            HMPSSI
                        </h1>
                        <div class="flex mb-2 justify-center">
                            <div class="rounded-xl p-6 text-center transition ease-in-out delay-100 hover:scale-105">
                                <img src="img/candidate/paslon1.jpg" alt="" class="w-full sm:w-72"
                                    class="mx-auto" />
                                <h1 class="mt-6 mb-1 text-3xl text-secondary">Fateh</h1>
                                <dialog id="my_modal_3" class="modal">
                                    <div class="modal-box">
                                        <form method="dialog">
                                            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">
                                                ✕
                                            </button>
                                        </form>
                                        <h3 class="font-bold text-lg mb-4">Cek Visi & Misi beliau</h3>
                                        <p class="py-4">Visi</p>
                                        <p class="pb-4">Menjadikan lorem</p>
                                        <p class="py-4">Misi</p>
                                        <p class="pb-4">Menjadikan lorem</p>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                        <button type="button" class="bg-main text-white p-3 rounded"
                            onclick="my_modal_3.showModal()">
                            Visi dan Misi
                        </button>
                    </div> --}}
                    <!-- hmpsti -->
                    {{-- <div class="text-center bg-background w-fit mx-4 p-4 rounded-xl shadow-lg pb-8 mb-7">
                        <h1 class="my-1 text-2xl text-background font-bold bg-secondary w-fit mx-auto p-2 rounded-xl">
                            HMPSTI
                        </h1>
                        <div class="flex mb-2 justify-center">
                            <div class="rounded-xl p-6 text-center transition ease-in-out delay-100 hover:scale-105">
                                <img src="img/candidate/paslon1.jpg" alt="" class="w-full sm:w-72"
                                    class="mx-auto" />
                                <h1 class="mt-6 mb-1 text-3xl text-secondary">Fateh</h1>
                                <dialog id="my_modal_3" class="modal">
                                    <div class="modal-box">
                                        <form method="dialog">
                                            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">
                                                ✕
                                            </button>
                                        </form>
                                        <h3 class="font-bold text-lg mb-4">Cek Visi & Misi beliau</h3>
                                        <p class="py-4">Visi</p>
                                        <p class="pb-4">Menjadikan lorem</p>
                                        <p class="py-4">Misi</p>
                                        <p class="pb-4">Menjadikan lorem</p>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                        <button type="button" class="bg-main text-white p-3 rounded"
                            onclick="my_modal_3.showModal()">
                            Visi dan Misi
                        </button>
                    </div> --}}
                </div>
            </div>
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#363062" fill-opacity="1"
                d="M0,160L80,176C160,192,320,224,480,218.7C640,213,800,171,960,165.3C1120,160,1280,192,1360,208L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#363062" fill-opacity="1"
                d="M0,160L80,176C160,192,320,224,480,218.7C640,213,800,171,960,165.3C1120,160,1280,192,1360,208L1440,224L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
            </path>
        </svg>

        <!-- Live Count -->
        <section class="my-12" id="live_count">
            <h2 class="text-secondary text-3xl sm:text-4xl font-bold text-center">Realtime Live Count</h2>
            <hr class="border-b-4 border-secondary max-w-32 mx-auto mt-4" />
            <div class="w-85 block mx-auto justify-center my-12 lg:flex">
                <div class="mx-12 mb-10">
                    <h2
                        class="text-center text-white p-2 mb-3 font-bold text-xl bg-secondary w-fit rounded-lg mx-auto">
                        BEM
                    </h2>
                    <canvas id="presma"></canvas>
                </div>
                <div class="mx-12 mb-10">
                    <h2
                        class="text-center text-white p-2 mb-3 font-bold text-xl bg-secondary w-fit rounded-lg mx-auto">
                        HMPSSI
                    </h2>
                    <canvas id="himti"></canvas>
                </div>
                <div class="mx-12 mb-10">
                    <h2
                        class="text-center text-white p-2 mb-3 font-bold text-xl bg-secondary w-fit rounded-lg mx-auto">
                        HMPSTI
                    </h2>
                    <canvas id="himsi"></canvas>
                </div>
            </div>
            <!-- <h2 class="text-secondary text-2xl mb-6 mt-8 text-center">*Realtime tanpa perlu refresh halaman</h2> -->
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#363062" fill-opacity="1"
                d="M0,160L80,176C160,192,320,224,480,218.7C640,213,800,171,960,165.3C1120,160,1280,192,1360,208L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#363062" fill-opacity="1"
                d="M0,160L80,176C160,192,320,224,480,218.7C640,213,800,171,960,165.3C1120,160,1280,192,1360,208L1440,224L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
            </path>
        </svg>

        <!-- syarat dan ketentuan -->
        <section class="my-12" id="sk">
            <h2 class="text-secondary text-3xl sm:text-4xl font-bold text-center">Syarat dan Ketentuan</h2>
            <hr class="border-b-4 border-secondary max-w-32 mx-auto mt-4" />
            <div class="container mx-auto px-4 py-5 mt-12">
                <div class="lg:grid lg:grid-cols-4 lg:gap-4 block">
                    <div class="border-2 p-4 rounded shadow-lg flex flex-col h-full mb-10 bg-white">
                        <img src="img/topi.png" alt="kampus" width="150" class="mx-auto mb-auto" />
                        <p class="text-xl text-center mt-auto h-32">
                            <strong>1</strong>. Mahasiswa aktif STT Terpadu Nurul Fikri
                        </p>
                    </div>
                    <div class="border-2 p-4 rounded shadow-lg flex flex-col h-full mb-10 bg-white">
                        <img src="img/email.png" alt="email" width="150" class="mx-auto mb-auto" />
                        <p class="text-xl text-center mt-auto h-32">
                            <strong>2</strong>. Menerima email verifikasi dari tim KPR
                        </p>
                    </div>
                    <div class="border-2 p-4 rounded shadow-lg flex flex-col h-full mb-10 bg-white">
                        <img src="img/voting.png" alt="vote" width="150" class="mx-auto mb-auto" />
                        <p class="text-xl text-center mt-auto h-32">
                            <strong>3</strong>. Melakukan voting di kampus bagi mahasiswa reguler
                        </p>
                    </div>
                    <div class="border-2 p-4 rounded shadow-lg flex flex-col h-full mb-10 bg-white">
                        <img src="img/kontak.png" alt="kontak" width="150" class="mx-auto mb-auto" />
                        <p class="text-xl text-center mt-auto h-32">
                            <strong>4</strong>. Menghubungi PIC untuk voting unit ke bagian mahasiswa karyawan
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#363062" fill-opacity="1"
                d="M0,160L80,176C160,192,320,224,480,218.7C640,213,800,171,960,165.3C1120,160,1280,192,1360,208L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#363062" fill-opacity="1"
                d="M0,160L80,176C160,192,320,224,480,218.7C640,213,800,171,960,165.3C1120,160,1280,192,1360,208L1440,224L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
            </path>
        </svg>

        <!-- Siap Vote -->
        <section class="my-12" id="siap_vote">
            <div class="text-center sm:flex justify-center items-center block">
                <div class="mt-10">
                    <h2 class="text-secondary text-2xl sm:text-3xl font-bold text-center mx-5">
                        Kelas Reguler ?
                    </h2>
                </div>
                <div class="mt-10">
                    <a href="/ready"
                        class="text-xl bg-secondary text-white hover:bg-indigo-800 transition delay-100 p-4 rounded-lg">Vote
                        Sekarang</a>
                </div>
            </div>
            <p class="text-center mt-12 mb-4 text-secondary text-xl">
                Atau mungkin kamu 🤔
            </p>
            <div class="text-center sm:flex justify-center items-center block">
                <div class="mt-7">
                    <h2 class="text-secondary text-2xl sm:text-3xl font-bold text-center mx-5">
                        Kelas Karyawan ?
                    </h2>
                </div>
                <div class="mt-10">
                    <a href="/auth/karyawan/register"
                        class="text-xl bg-secondary text-white hover:bg-indigo-800 transition delay-100 p-4 rounded-lg">
                        Daftar Ulang</a>
                </div>
            </div>
        </section>

        <!-- footer -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#363062" fill-opacity="1"
                d="M0,160L80,176C160,192,320,224,480,218.7C640,213,800,171,960,165.3C1120,160,1280,192,1360,208L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
        <footer class="py-6 b-0 bg-secondary">
            <!-- <hr class="border-t-1 border-secondary" /> -->
            <div class="sm:flex sm:justify-between sm:px-12 block">
                <h2 class="mt-6 text-center text-white sm:ml-12 text-white">
                    Created with <i class="fas fa-heart text-red-400"></i> + <i class="fas fa-coffee"></i> by
                    <a href="https://github.com/KPR-STTNF" class="underline" target="_blank"> Web Dev KPR 2024</a>
                </h2>
                <h2 class="mt-6 text-center text-white sm:mr-12 font-bold">
                    <a href="https://www.instagram.com/kprsttnf/" class="mx-2 hover:text-main" target="_blank"><i
                            class="fab fa-instagram fa-2x"></i>
                    </a>
                    <a href="mailto:kprsttnf@gmail.com" class="mx-2 hover:text-main" target="_blank"><i
                            class="fas fa-envelope fa-2x"></i>
                    </a>
                    <a href="https://wa.me/6283197034192" class="mx-2 hover:text-main"><i
                            class="fab fa-whatsapp fa-2x" target="_blank"></i>
                    </a>
                    <a href="https://github.com/KPR-STTNF" class="mx-2 hover:text-main"><i
                            class="fab fa-github fa-2x" target="_blank"></i>
                    </a>
                </h2>
                <h2 class="mt-6 text-center text-white sm:mr-12 font-bold">
                    <a href="#siap_vote" class="underline text-secondary p-2 rounded bg-white"
                        onclick="techstack_modal.showModal()"><i class="fas fa-tools"></i> Our tech stack
                    </a>
                </h2>
            </div>
            <dialog id="techstack_modal" class="modal">
                <div class="modal-box">
                    <form method="dialog">
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </form>
                    <h3 class="font-bold text-lg mb-4">We're build in</h3>
                    <div class="mt-1">
                        <h2>Backend</h2>
                        <div class="flex mt-2 align-center">
                            <a href="https://laravel.com/" target="_blank">
                                <i class="fab fa-laravel fa-4x text-red-500 mx-2"></i>
                            </a>
                            <a href="https://redis.com/" target="_blank"><img
                                    src="{{ asset('img/stacks/redis-logo.svg') }}" alt="" width="110"
                                    class="mx-2" /></a>
                            <a href="https://mysql.com/" target="_blank"><img
                                    src="{{ asset('img/stacks/mysql.png') }}" alt="" width="110"
                                    class="mx-2" /></a>
                        </div>
                    </div>
                    <div class="mt-5">
                        <h2>Frontend & UI Kit</h2>
                        <div class="flex mt-2 items-center">
                            <a href="https://tailwindcss.com" target="_blank">
                                <img src="{{ asset('img/stacks/tailwindcss.svg') }}" alt="" width="100"
                                    class="mx-1" /></a>
                            <a href="https://daisyui.com/" target="_blank">
                                <img src="{{ asset('img/stacks/daisyui.svg') }}" alt="" width="100"
                                    class="mx-1" /></a>
                            <a href="https://fontawesome.com/" target="_blank">
                                <i class="fas fa-font-awesome fa-6x mx-1"></i></a>
                        </div>
                    </div>
                </div>
            </dialog>
        </footer>
        <a href="https://wa.me/6283197034192" target="_blank" rel="noreferrer noopener">
            <div
                class="flex items-center bg-green-500 w-fit p-4 rounded-full fixed z-20 right-8 bottom-12 transition ease-in-out delay-100 hover:scale-110">
                <img src="img/brands/whatsapp-white.svg" class="w-8" alt="" />
                <!-- <p class="text-xl text-white font-bold ml-3">Hubungi Kami</p> -->
            </div>
        </a>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"
        integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.socket.io/4.7.2/socket.io.min.js"></script>
    <script>
        const presma = document.getElementById('presma');
        const himti = document.getElementById('himti');
        const himsi = document.getElementById('himsi');

        const data_voting = {};

        // presma
        const chart_presma = new Chart(presma, {
            type: 'doughnut',
            data: {
                labels: [],
                datasets: [{
                    label: '# of Votes',
                    data: [],
                    borderWidth: 1,
                }, ],
            },
            options: {
                Responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    },
                },
            },
        });
        // himsi
        const chart_himsi = new Chart(himsi, {
            type: 'doughnut',
            data: {
                labels: [],
                datasets: [{
                    label: '# of Votes',
                    data: [],
                    borderWidth: 1,
                }, ],
            },
            options: {
                Responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    },
                },
            },
        });
        // himti
        const chart_himti = new Chart(himti, {
            type: 'doughnut',
            data: {
                labels: [],
                datasets: [{
                    label: '# of Votes',
                    data: [],
                    borderWidth: 1,
                }, ],
            },
            options: {
                Responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    },
                },
            },
        });

        // Connect Socket
        const socket = io("https://pemira.nurulfikri.ac.id");

        socket.on("connect", () => {
            socket.emit("get_vote");
        })

        socket.on("live_count", (result) => {
                    // Filter BEM
                    const data_bem = result.filter(((e) => e.kategori == "Badan Eksekutif Mahasiswa"))
                    let labels_bem = data_bem.map((e) => e.nama_kandidat)
                    let counts_bem = data_bem.map((e) => e.jumlah_suara)

                    chart_presma.data.labels = labels_bem
                    chart_presma.data.datasets?.[0 ?.data = counts_bem
                            chart_presma.data.datasets?.[0 ?.backgroundColor = '#EE0000';
                                chart_presma.data.datasets?.[1 ?.backgroundColor = '#3B82F6';

                                    chart_presma.update();

                                    // Filter HIM-TI
                                    const data_ti = result.filter(((e) => e.kategori ==
                                        "Himpunan Mahasiswa Teknik Informatika"))
                                    let labels_ti = data_ti.map((e) => e.nama_kandidat)
                                    let counts_ti = data_ti.map((e) => e.jumlah_suara)

                                    chart_himti.data.labels = labels_ti
                                    chart_himti.data.datasets?.[0]?.data = counts_ti
                                    chart_himti.data.datasets?.[0]?.backgroundColor = '#EE0000';
                                    chart_himti.data.datasets?.[1]?.backgroundColor = '#3B82F6';

                                    chart_himti.update();

                                    // Filter HIM-SI
                                    const data_si = result.filter(((e) => e.kategori ==
                                        "Himpunan Mahasiswa Sistem Informasi"))
                                    let labels_si = data_si.map((e) => e.nama_kandidat)
                                    let counts_si = data_si.map((e) => e.jumlah_suara)

                                    chart_himsi.data.labels = labels_si
                                    chart_himsi.data.datasets?.[0]?.data = counts_si
                                    chart_himsi.data.datasets?.[0]?.backgroundColor = '#EE0000';
                                    chart_himsi.data.datasets?.[1]?.backgroundColor = '#3B82F6';

                                    chart_himsi.update();
                                })

                            document.addEventListener('DOMContentLoaded', function() {
                                // Simulate content loading delay (replace this with your actual content loading logic)
                                setTimeout(function() {
                                    var preloadContainer = document.getElementById('preload-container');

                                    // Add a class to trigger the fade-out effect
                                    preloadContainer.classList.add('fade-out');

                                    // After the fade-out animation completes, hide the preload container and show the main content
                                    preloadContainer.addEventListener('transitionend', function() {
                                        preloadContainer.style.display = 'none';
                                        document.getElementById('main-content').style.display = 'block';
                                    });
                                }, 1000); // Adjust the delay time as needed
                            });
    </script>
</body>

</html>
