<?php
include 'layout/header.php';
?>

<div class="container" style="margin-top: 3rem;">

    <div class="row" style="margin-top: 1rem;">
        <h2 class="text-center fw-bold mb-2">DATA BUKU</h2>

        <div class="col mt-3">
            <a href="data/tambah_buku.php" class="btn btn-warning fw-bold mb-3 fs-5 px-4" style="margin-left: 73rem;">Tambah</a>
            <table class="table table-hover table-bordered text-center fs-5">
                <thead class="table-dark">
                    <tr>
                        <th class="col" scope="col">ID Buku</th>
                        <th class="col-4" scope="col">Judul Buku</th>
                        <th class="col" scope="col">Penulis</th>
                        <th class="col" scope="col">Penerbit</th>
                        <th class="col" scope="col">Tahun Terbit</th>
                        <th scope="col-1">Aksi</th>
                    </tr>
                </thead>

                <?php
                include '../koneksi/koneksi.php';

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
                            <td class="">
                                <a href="data/detail_buku.php?id_buku=<?php echo $d['id_buku']; ?>" class="btn btn-outline-primary fw-bolder">Detail</a>
                                <a href="data/edit_buku.php?id_buku=<?php echo $d['id_buku']; ?>" class="btn btn-outline-success fw-bolder">Edit</a>
                                <a href="data/delete_buku.php?id_buku=<?php echo $d['id_buku']; ?>" class="btn btn-outline-danger fw-bolder">Hapus</a>
                            </td>
                        </tr>
                    </tbody>

                <?php
                }
                ?>

            </table>
        </div>

    </div>

</div>

<?php
include 'layout/footer.php';
?>