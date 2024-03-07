<!doctype html>
<html lang="en">

<head>
    <!-- css & js bootstrap -->
    <link rel="stylesheet" href="../../asset/css/bootstrap.css">
    <script type="text/javascript" src="../../asset/js/bootstrap.js"></script>

    <title>Petugas | Edit Buku</title>
</head>

<body>
    <?php
    include '../../koneksi/koneksi.php';
    ?>

    <?php
    $id = $_GET['id_buku'];
    $data = mysqli_query($koneksi, "SELECT * from buku where id_buku='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>

        <div class="container col-4" style="margin-top: 10rem;">
            <div class="content">
                <div class="card p-5 shadow-lg">
                    <div class="row">
                        <div class="col">
                            <h2 class="text-center mb-3">EDIT BUKU</h2>

                            <form action="e_buku.php" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <input type="hidden" name="id_buku" value="<?php echo $d['id_buku']; ?>">
                                    <label class="form-label fw-semibold">Judul</label>
                                    <input type="text" class="form-control" name="judul" value="<?php echo $d['judul']; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Penulis</label>
                                    <input type="text" class="form-control" name="penulis" value="<?php echo $d['penulis']; ?>" required>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">Penerbit</label>
                                            <input type="text" class="form-control" name="penerbit" value="<?php echo $d['penerbit']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">Tahun Terbit</label>
                                            <input type="text" class="form-control" name="tahunterbit" value="<?php echo $d['tahunterbit']; ?>" required>
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
                                <button type="submit" class="btn btn-success fw-bolder px-3" name="update">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    <?php
    }
    ?>



</body>

</html>