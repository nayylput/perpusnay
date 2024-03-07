<?php
include '../../koneksi/koneksi.php';

$id = $_GET['id_peminjam'];
mysqli_query($koneksi, "DELETE from peminjam where id_peminjam='$id'");

header("location:../peminjam.php");
