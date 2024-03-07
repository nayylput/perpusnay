<?php

include '../../koneksi/koneksi.php';

$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$nama = $_POST['nama'];
$tgl_baca = $_POST['tgl_baca'];

mysqli_query($koneksi, "INSERT into peminjam (id_peminjam, id_buku, judul, nama, tgl_baca)
		values('', '$id_buku','$judul','$nama','$tgl_baca')");

$pilih = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku = '$id_buku'");
while ($data = mysqli_fetch_assoc($pilih)) {
	$id = $data["id_buku"];
	echo "<script>alert('Buku berhasil dipinjam')
		document.location='detail.php?id_buku=$id';</script>";
}
