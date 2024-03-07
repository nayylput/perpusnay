<!doctype html>
<html lang="en">

<head>
    <!-- css & js bootstrap -->
    <link rel="stylesheet" href="../../asset/css/bootstrap.css">
    <script type="text/javascript" src="../../asset/js/bootstrap.js"></script>

    <title>Tambah Petugas</title>
</head>

<body>

    <div class="container" style="margin-top: 10rem;">
        <div class="content">
            <div class="card col-6 mx-auto shadow-lg">
                <div class="row">
                    <div class="col m-5">
                        <h2 class="text-center fw-semibold mb-4">TAMBAH PETUGAS</h2>

                        <form action="t_ptg.php" method="post">
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
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Username</label>
                                        <input type="text" class="form-control" name="username">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Level</label>
                                <select class="form-select" name="level" aria-label="Default select example">
                                    <option selected>Pilih</option>
                                    <option value="petugas">Petugas</option>
                                </select>
                            </div>

                            <a href="../anggota.php" class="btn btn-danger fw-bolder px-3">Kembali</a>
                            <button type="submit" class="btn btn-success text-white fw-bold mx-auto">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>