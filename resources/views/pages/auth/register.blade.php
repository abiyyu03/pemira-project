<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Register - Pemira 2024 STTNF</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container-full h-screen flex items-center bg-main">
        <div class="shadow rounded-xl mx-auto bg-background">
            <div class="flex p-8 max-w-2xl">
                <div class="mr-4 max-auto block">
                    <h2 class="text-center text-3xl font-bold text-secondary">KPR STTNF 2024</h2>
                    <div class="">
                        <img src="img/logo.png" alt="pemira_logo" width="170" class="mx-auto" />
                    </div>
                    <p class="text-center text-secondary">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur quae commodi quibusdam
                        optio non aspernatur esse ratione dolorum maiores quisquam corrupti nobis sapiente pariatur
                        ducimus deleniti dicta, deserunt molestias dolore!
                    </p>
                </div>
                <div class="shadow rounded-xl p-5 bg-card items-center">
                    <h1 class="text-center text-2xl my-12">Daftar Ulang Mahasiswa</h1>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="email" class="border-2 block border-secondary p-2 rounded-lg" required />
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="p-3 bg-main text-white hover:bg-blue-400 rounded w-full">
                                Daftar !
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
