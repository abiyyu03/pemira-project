<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Yuk Vote - Pemira 2024 STTNF</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
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
            @yield('content')
            @include('sweetalert::alert')
        </div>

        <script src="https://cdn.socket.io/4.7.2/socket.io.min.js"></script>
        <script>
            const socket = io("https://pemira.nurulfikri.ac.id");

            const UpdateVote = () => {
                socket.emit("update_vote")
            };
        </script>
    </div>
</body>

</html>
