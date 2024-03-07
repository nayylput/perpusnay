<!doctype html>
<html lang="en">

<head>
    <!-- css & js bootstrap -->
    <link rel="stylesheet" href="../../asset/css/bootstrap.css">
    <script type="text/javascript" src="../../asset/js/bootstrap.js"></script>

    <title>Peminjam | Pinjam Buku</title>
</head>

<body>


    <div class="container col-4" style="margin-top: 10rem;">
        <div class="content">
            <div class="card p-5 shadow-lg">
                <div class="row">
                    <div class="col">
                        <h2 class="text-center fw-semibold">PINJAM BUKU</h2>

                        <?php
                        if (isset($_GET['id_buku'])) {
                            $id_buku = $_GET['id_buku'];
                        } else {
                            die("Data tidak tersedia");
                        }
                        include "../../koneksi/koneksi.php";
                        $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='$id_buku'");
                        $result = mysqli_fetch_array($query);

                        ?>

                        <form action="t_pinjam.php" method="post">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">ID Buku</label>
                                <input type="text" class="form-control" name="id_buku" required value="<?php echo $result['id_buku'] ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Judul</label>
                                <input type="text" class="form-control" name="judul" required value="<?php echo $result['judul'] ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Tanggal Baca</label>
                                <input type="date" class="form-control" name="tgl_baca">
                            </div>

                            <a href="../buku.php" class="btn btn-danger fw-bolder me-2">Kembali</a>
                            <button type="submit" class="btn btn-success text-white fw-bold mx-auto">Pinjam</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>