<?php
include '../../koneksi/koneksi.php';

$id = $_GET['id_ulasan'];
mysqli_query($koneksi, "DELETE from ulasan where id_ulasan='$id'");

header("location:../ulasan.php");
