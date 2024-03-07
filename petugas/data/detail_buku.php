<!doctype html>
<html lang="en">

<head>
  <!-- css & js bootstrap -->
  <link rel="stylesheet" href="../../asset/css/bootstrap.css">
  <script type="text/javascript" src="../../asset/js/bootstrap.js"></script>

  <title>Detail Buku</title>
</head>

<body>

  <div class="container" style="margin-top: 10rem;">
    <div class="card col-8 mt-5 mx-auto shadow-lg">
      <div class="row m-4">

        <?php

        include '../../koneksi/koneksi.php';
        if (isset($_GET['id_buku'])) {
          $id_buku = $_GET['id_buku'];
        } else {
          die("Error, data tidak tersedia");
        }
        $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='$id_buku' ");
        $result = mysqli_fetch_array($query);

        ?>

        <div class="col-6">
          <img class="mt-2 mb-2 ms-3 rounded-3" src="<?php echo "../asset/sampul/$result[gambar]" ?>" height="500" alt="">
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
                <h5> : <?php echo $result['id_buku']; ?> </h5>
              </td>
            </tr>
            <tr>
              <td>
                <h5>Judul </h5>
              </td>
              <td>
                <h5> : <?php echo $result['judul']; ?> </h5>
              </td>
            </tr>
            <tr>
              <td>
                <h5>Penulis </h5>
              </td>
              <td>
                <h5> : <?php echo $result['penulis']; ?> </h5>
              </td>
            </tr>
            <tr>
              <td>
                <h5>Penerbit </h5>
              </td>
              <td>
                <h5> : <?php echo $result['penerbit']; ?> </h5>
              </td>
            </tr>
            <tr>
              <td>
                <h5>Tahun Terbit &nbsp;</h5>
              </td>
              <td>
                <h5> : <?php echo $result['terbit']; ?> </h5>
              </td>
            </tr>
          </table>
          <a href="../buku.php" class="btn btn-danger mt-3 me-2 px-3 fw-bolder">Kembali</a>


        </div>
      </div>
    </div>
  </div>

</body>

</html>