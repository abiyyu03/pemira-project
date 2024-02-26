<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="bg-primary">
    <div class="container-fluid cekContainer text-light py-5 d-flex justify-content-center">
        <div class="container mx-auto d-flex d-flex justify-content-center flex-column align-items-center"
            style="max-width: 600px;">
            <h4 class="text-center mb-4">SILAHKAN MASUKAN NIM ANDA</h4>
            <input class="form-control text-center mb-3" type="text" id="nim" style="border-radius: 12px;"
                onkeydown="if (event.keyCode === 13) { event.preventDefault(); cekUserPassword(); }">
            <button class="btn btn-outline-light btn-block" onclick="cekUserPassword()">CEK</button>
            <div class="mt-5">
                <h5 class="text-center mb-3" id="password">Password kamu adalah</h5>
                <h1 class="text-center" id="passwordResult">????</h1>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/extensions/datatables-new/jquery.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/myjs.js') }}"></script>
    <script src="//unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        const cekUserPassword = async () => {
            const nim = $("#nim").val();
            const response = await axios.get('/api/registrasi_user/' + nim);
            const data = response.data.data;
            if (data) {
                console.log(data)
                $("#password").text("Password Kamu Adalah")
                $("#passwordResult").text(data);
            } else {
                $("#password").text(" ");
                $("#passwordResult").text("Data Tidak Ditemukan");
            }
        }
    </script>
</body>

</html>
