<?php
include 'layout/header.php';
?>

<div class="container" style="margin-top: 12rem;">
  <div class="row mt-3 justify-content-center">
    <div class="col-4">
      <div class="card shadow-lg">
        <div class="card-body mx-auto">
          <img src="../asset/img/book.jpg" width="300" class="">
          <h4 class="text-center fw-bold">Data Buku</h4>
          <a href="data/lap_db.php" class="btn btn-outline-dark d-grid gap-5 fs-4 fw-semibold">Print</a>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card shadow-lg">
        <div class="card-body mx-auto">
          <img src="../asset/img/anggota.jpg" width="200" class="">
          <h4 class="text-center fw-bold">Data Peminjam</h4>
          <a href="data/lap_dp.php" class="btn btn-outline-dark d-grid gap-5 fs-4 fw-semibold">Print</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include 'layout/footer.php';
?>