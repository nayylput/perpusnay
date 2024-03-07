<!doctype html>
<html lang="en">

<head>
    <!-- css & js bootstrap -->
    <link rel="stylesheet" href="../../asset/css/bootstrap.css">
    <script type="text/javascript" src="../../asset/js/bootstrap.js"></script>

    <title>Laporan Data Buku</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col text-center mt-4">
                <h2>PERPUSTAKAAN SMKN 5 KOTA BEKASI</h2>
                <h3>LAPORAN DATA BUKU 2024</h3>
            </div>
        </div>
        <div class="row text-center">
            <table class="table table-hover mt-4">
                <thead class="table-dark">
                    <tr>
                        <th class="col" scope="col">ID Buku</th>
                        <th class="col" scope="col">Judul Buku</th>
                        <th class="col" scope="col">Penulis</th>
                        <th class="col" scope="col">Penerbit</th>
                        <th class="col" scope="col">Tahun Terbit</th>
                    </tr>
                </thead>

                <?php
                include '../../koneksi/koneksi.php';

                $data = mysqli_query($koneksi, "SELECT * FROM buku");
                while ($d = mysqli_fetch_array($data)) {
                ?>

                    <tbody>
                        <tr class="">
                            <th scope="row"><?php echo $d['id_buku']; ?></th>
                            <td><?php echo $d['judul']; ?></td>
                            <td><?php echo $d['penulis']; ?></td>
                            <td><?php echo $d['penerbit']; ?></td>
                            <td><?php echo $d['terbit']; ?></td>
                        </tr>
                    </tbody>

                <?php
                }
                ?>

            </table>
        </div>
        <div class="row mt-3">
            <div class="col-9">
                <h5>Mengetahui,</h5>
                <h5>Kepala Perpustakaan</h5>
                <h5 style="margin-top: 4.5rem;"><b>Yuli Supriyanto, S.Kom, M.Pd</b></h5>
            </div>
        </div>
    </div>

    <script>
        window.print();
    </script>

</body>

</html>