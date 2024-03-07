<?php

include '../koneksi/koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($koneksi, "INSERT into user(nama, email, alamat, username, password)
		values('$nama','$email','$alamat','$username','$password')");

echo "<script>alert('Register berhasil!');
	document.location='../index.php'</script>";
