<?php
include 'layout/header.php';
?>

<div class="container" style="margin-top: 3rem;">
  <div class="row" style="margin-top: 1rem;">
    <h2 class="mb-3 text-center fw-bold">DATA ANGGOTA</h2>
    <div class="col mt-3 mx-auto">
      <a href="data/tambah_ptg.php" class="btn btn-warning mb-3 fs-5 px-3 fw-bolder" style="margin-left: 69rem;">Tambah Petugas</a>
      <table class="table table-hover table-bordered text-center fs-5">
        <thead class="table-dark">
          <tr>
            <th class="col" scope="col">ID User</th>
            <th class="col" scope="col">Nama Lengkap</th>
            <th class="col" scope="col">Email</th>
            <th class="col" scope="col">Alamat</th>
            <th class="col" scope="col">Username</th>
            <th class="col" scope="col">Level</th>
          </tr>
        </thead>

        <?php
        include '../koneksi/koneksi.php';

        $data = mysqli_query($koneksi, "SELECT * FROM user");
        while ($d = mysqli_fetch_array($data)) {
        ?>

          <tbody>
            <tr class="">
              <th scope="row"><?php echo $d['id_user']; ?></th>
              <td><?php echo $d['nama']; ?></td>
              <td><?php echo $d['email']; ?></td>
              <td><?php echo $d['alamat']; ?></td>
              <td><?php echo $d['username']; ?></td>
              <td><?php echo $d['level']; ?></td>
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