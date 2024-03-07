<?php

include '../../koneksi/koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

mysqli_query($koneksi, "INSERT into user(nama, email, alamat, username, password, level)
		values('$nama','$email','$alamat','$username','$password','$level')");

echo "<script>alert('Tambah petugas berhasil');
	document.location='../anggota.php'</script>";
