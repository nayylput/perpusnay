<!doctype html>
<html lang="en">

<head>
  <!-- css & js bootstrap -->
  <link rel="stylesheet" href="../../asset/css/bootstrap.css">
  <script type="text/javascript" src="../../asset/js/bootstrap.js"></script>

  <title>Peminjam | Detail Buku</title>
</head>

<body>

  <div class="container">
    <div class="card col-8 mx-auto shadow-lg" style="margin-top: 10rem;">
      <div class="row m-4">

        <?php

        include '../../koneksi/koneksi.php';
        if (isset($_GET['id_buku'])) {
          $id_buku = $_GET['id_buku'];
        } else {
          die("Error, Data tidak tersedia");
        }
        $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='$id_buku' ");
        $result = mysqli_fetch_array($query);

        ?>

        <div class="col-6">
          <img class="mt-3 ms-3 mb-2 rounded-3" src="../../petugas/asset/sampul/<?php echo $result['gambar']; ?>" height="500" alt="">
        </div>
        <div class="col">
          <h2 class="mt-3">DETAIL BUKU</h2>
          <hr>
          <table>
            <tr>
              <td>
                <h5>ID Buku </h5>
              </td>
              <td>
                <h5> : &nbsp; <?php echo $result['id_buku']; ?> </h5>
              </td>
            </tr>
            <tr>
              <td>
                <h5>Judul </h5>
              </td>
              <td>
                <h5> : &nbsp; <?php echo $result['judul']; ?> </h5>
              </td>
            </tr>
            <tr>
              <td>
                <h5>Penulis </h5>
              </td>
              <td>
                <h5> : &nbsp; <?php echo $result['penulis']; ?> </h5>
              </td>
            </tr>
            <tr>
              <td>
                <h5>Penerbit </h5>
              </td>
              <td>
                <h5> : &nbsp; <?php echo $result['penerbit']; ?> </h5>
              </td>
            </tr>
            <tr>
              <td>
                <h5>Tahun Terbit &nbsp;</h5>
              </td>
              <td>
                <h5> : &nbsp; <?php echo $result['terbit']; ?> </h5>
              </td>
            </tr>
          </table>
          <a href="../buku.php" class="btn btn-danger mt-3 me-2 px-4 fw-semibold">Kembali</a>
          <a href="baca.php?idbaca=<?php echo $result['id_buku'] ?>" class="btn mt-3 px-4 btn-success fw-semibold">Baca Sekarang</a>

        </div>
      </div>
    </div>
  </div>

</body>

</html>