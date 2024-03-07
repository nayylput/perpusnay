<!doctype html>
<html lang="en">

<head>
  <!-- css & js bootstrap -->
  <link rel="stylesheet" href="../../asset/css/bootstrap.css">
  <script type="text/javascript" src="../../asset/js/bootstrap.js"></script>

  <title>Peminjam | Baca Buku</title>
</head>

<body>

  <?php
  include '../../koneksi/koneksi.php';
  if (isset($_GET['idbaca'])) {
    $id = $_GET['idbaca'];
  }
  $sql = mysqli_query($koneksi, "SELECT * from buku where id_buku='$id'");
  $info = mysqli_fetch_array($sql);
  ?>

  <embed src="../../petugas/asset/buku/<?php echo $info['buku']; ?>" type="application/pdf" width="100%" height="1000">

</body>

</html>