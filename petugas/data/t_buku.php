<?php

include '../../koneksi/koneksi.php';

$judul          = $_POST['judul'];
$penulis        = $_POST['penulis'];
$penerbit       = $_POST['penerbit'];
$terbit    = $_POST['terbit'];
$gambar         = $_FILES['gambar']['name'];
$buku           = $_FILES['buku']['name'];
$file           = $_FILES['gambar']['tmp_name'];
$file_tmp       = $_FILES['buku']['tmp_name'];
$ekstensi_diperbolehkan = array('pdf');

move_uploaded_file($file, '../asset/sampul/' . $gambar);
move_uploaded_file($file_tmp, '../asset/buku/' . $buku);
mysqli_query($koneksi, "INSERT into buku values('', '$judul','$penulis','$penerbit','$terbit','$gambar','$buku') ");

echo "<script>alert('Buku berhasil ditambahkan');
document.location='../buku.php'</script>";
