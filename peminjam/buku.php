<?php
include 'layout/header.php';
?>

<div class="container" style="margin-top: 3rem;">
  <div class="row ">
    <h2 class="text-center fw-bold mb-5">KOLEKSI BUKU</h2>

    <?php
    include '../koneksi/koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi, "SELECT * FROM buku Order by id_buku asc");

    while ($d = mysqli_fetch_array($data)) {

    ?>


      <div class="card m-2 shadow-lg mx-auto" style="width: 15rem;">
        <img src="../asset/img/<?php echo $d['gambar']; ?>" class="card-img-top p-2 mt-2 rounded-4" alt="gambar">
        <div class="card-body p-2">
          <h5 class="card-title text-center mb-3"><?php echo $d['judul']; ?></h5>
          <a href="data/pinjam_buku.php?id_buku=<?php echo $d['id_buku'] ?>" class="btn btn-success fw-bold mb-3 mx-2 px-3">Pinjam</a>
          <a href="data/ulasan_buku.php?id_buku=<?php echo $d['id_buku'] ?>" class="btn btn-primary fw-bold mb-3 px-3">Ulasan</a>
        </div>
      </div>

    <?php

    }

    ?>

  </div>
</div>
</div>

<?php
include 'layout/footer.php';
?>