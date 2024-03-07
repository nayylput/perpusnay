<?php

include '../../koneksi/koneksi.php';

$judul = $_POST['judul'];
$username = $_POST['username'];
$ulasan = $_POST['ulasan'];

mysqli_query($koneksi, "INSERT into ulasan(id_ulasan, judul, username, ulasan)
		values('','$judul','$username','$ulasan')");

echo "<script>alert('Terimakasih atas ulasannya!');
		document.location='../buku.php'</script>";
