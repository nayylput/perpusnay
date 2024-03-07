<?php
include '../../koneksi/koneksi.php';

$id = $_GET['id_buku'];
mysqli_query($koneksi, "DELETE from buku where id_buku='$id'");

header("location:../buku.php");
