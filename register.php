<!DOCTYPE html>
<html>

<head>
    <!-- css & js bootstrap -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
    <script type="text/javascript" src="asset/js/bootstrap.js"></script>

    <title>Perpustakaan SMKN 5 Bekasi | Register</title>
</head>

<body class="" style="background-color: #3468C0;">

    <div class="container" style="margin-top: 9rem;">
        <div class="content">
            <div class="card col-6 mx-auto shadow-lg">
                <div class="row">
                    <div class="col m-5">
                        <h1 class="text-center fw-bold">REGISTER</h1>

                        <form action="aksi/cek_rgstr.php" method="post">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Alamat</label>
                                <input type="text" class="form-control" name="alamat">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Username</label>
                                <input type="text" class="form-control" name="username">
                            </div>
                            <div class="mb-2">
                                <label class="form-label fw-semibold">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>

                            <p class="">Anda sudah memiliki akun? <a href="index.php" class="text-primary fw-bold">Login</a></p>
                            <button type="submit" class="btn btn-primary text-white fw-bold mx-auto">Daftar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>