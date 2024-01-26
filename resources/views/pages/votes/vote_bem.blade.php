<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Vote BEM - Pemira 2024 STTNF</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.5.0/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <html data-theme="cupcake">

    </html>
    <div class="navbar bg-base-100 p-1 pr-4">
        <div class="navbar-start">
            <img src="{{ asset('img/logo.png') }}" alt="" width="60" />
        </div>
        <div class="navbar-center">
            <a class="btn btn-ghost text-xl">Komisi Pemilihan Raya STT-NF</a>
        </div>
        <div class="navbar-end">
            <a href="#">Bantuan</a>
        </div>
    </div>
    <div class="container-full h-screen flex items-center bg-main">
        <div class="block mx-auto">
            <h1 class="text-4xl mb-4 text-white text-center">
                Vote Presma dan Wapresma
            </h1>
            <div class="grid grid-cols-2 grid-gap-2">
                <!-- card 1 -->
                <div
                    class="shadow rounded-xl bg-background p-6 mx-2 text-center transition ease-in-out delay-100 hover:scale-105">
                    <a href="#" onclick="my_modal_3.showModal()">
                        <img src="{{ asset('img/candidate/paslon2.jpg') }}" alt="" width="200"
                            class="mx-auto" />
                        <h1 class="my-6 text-3xl text-secondary">1. Fateh & Ubay</h1>
                    </a>
                    <!-- <a href="#" class="bg-secondary text-white p-3 rounded-lg">Visi & Misi</a> -->
                </div>
                <!-- card 2-->
                <div
                    class="shadow rounded-xl bg-background p-6 mx-2 text-center transition ease-in-out delay-100 hover:scale-105">
                    <a href="#" onclick="my_modal_3.showModal()">
                        <img src="{{ asset('img/candidate/paslon2.jpg') }}" alt="" width="200"
                            class="mx-auto" />
                        <h1 class="my-6 text-3xl text-secondary">2. Kotak Kosong</h1>
                    </a>
                    <dialog id="my_modal_3" class="modal">
                        <div class="modal-box">
                            <form method="dialog">
                                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">
                                    ✕
                                </button>
                            </form>
                            <h3 class="font-bold text-lg mb-4">
                                Apakah Kamu sudah yakin ?
                            </h3>
                            <p class="py-4">Visi</p>
                            <p class="pb-4">Menjadikan lorem</p>
                            <p class="py-4">Misi</p>
                            <p class="pb-4">Menjadikan lorem</p>
                            <div class="modal-action">
                                <a class="btn bg-green-500 text-secondary" href="before_hima.html">Ya, Vote !</a>
                            </div>
                        </div>
                    </dialog>
                    <!-- <a href="#" class="bg-secondary text-white p-3 rounded-lg">Visi & Misi</a> -->
                </div>
            </div>
            <div class="mx-auto text-center">
                <ul class="steps mt-12 flex justify-center bg-grey max-w-fit p-2 rounded-lg">
                    <li class="step text-white step-primary font-bold" data-content="1">
                        BEM
                    </li>
                    <li class="step text-white font-bold" data-content="2">HIMA</li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
