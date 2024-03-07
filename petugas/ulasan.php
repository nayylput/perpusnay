<?php
include 'layout/header.php';
?>

<div class="container" style="margin-top: 3rem;">
  <div class="row" style="margin-top: 1rem;">
    <h2 class="mb-5 fw-bold text-center">ULASAN PEMINJAM</h2>
    <div class="col mt-3 mx-auto">
      <table class="table table-hover table-bordered text-center fs-5">
        <thead class="table-dark">
          <tr>
            <th class="col-2" scope="col">ID Ulasan</th>
            <th class="col-2" scope="col">Username</th>
            <th class="col-2" scope="col">Judul Buku</th>
            <th class="col" scope="col">Ulasan</th>
            <th class="col" scope="col">Opsi</th>
          </tr>
        </thead>

        <?php
        include '../koneksi/koneksi.php';

        $data = mysqli_query($koneksi, "SELECT * FROM ulasan");
        while ($d = mysqli_fetch_array($data)) {
        ?>

          <tbody>
            <tr class="">
              <th scope="row"><?php echo $d['id_ulasan']; ?></th>
              <td><?php echo $d['username']; ?></td>
              <td><?php echo $d['judul']; ?></td>
              <td><?php echo $d['ulasan']; ?></td>
              <td class="">
                <a href="data/delete_ulasan.php?id_ulasan=<?php echo $d['id_ulasan']; ?>" class="btn btn-outline-danger fw-bolder px-3">Hapus</a>
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