<!doctype html>
<html lang="en">

<head>
    <!-- css & js bootstrap -->
    <link rel="stylesheet" href="../../asset/css/bootstrap.css">
    <script type="text/javascript" src="../../asset/js/bootstrap.js"></script>

    <title>Petugas | Tambah Buku</title>
</head>

<body>

    <div class="container col-4" style="margin-top: 10rem;">
        <div class="content">
            <div class="card p-5 shadow-lg">
                <div class="row">
                    <div class="col">
                        <h2 class="fw-semibold text-center mb-3">TAMBAH BUKU</h2>

                        <form action="t_buku.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Judul</label>
                                <input type="text" class="form-control" name="judul" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Penulis</label>
                                <input type="text" class="form-control" name="penulis" required>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Penerbit</label>
                                        <input type="text" class="form-control" name="penerbit" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Tahun Terbit</label>
                                        <input type="text" class="form-control" name="terbit" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label fw-semibold">Gambar</label>
                                <input class="form-control" name="gambar" type="file" id="formFileMultiple" multiple>
                            </div>
                            <div class="mb-4">
                                <label for="formFileMultiple" class="form-label fw-semibold">File <span class="text-danger">* pdf</span></label>
                                <input class="form-control" name="buku" type="file" id="formFileMultiple" multiple>
                            </div>


                            <a href="../buku.php" class="btn btn-danger fw-bolder px-3">Kembali</a>
                            <button type="submit" class="btn btn-success fw-bolder px-3">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>