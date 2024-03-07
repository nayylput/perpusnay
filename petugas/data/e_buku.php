<?php
include '../../koneksi/koneksi.php';

if (isset($_POST['update'])) {
    $id = $_POST['id_buku'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahunterbit = $_POST['tahunterbit'];
    $gambar         = $_FILES['gambar']['name'];
    $buku           = $_FILES['buku']['name'];
    $file           = $_FILES['gambar']['tmp_name'];
    $file_tmp       = $_FILES['buku']['tmp_name'];
    $ekstensi_diperbolehkan = array('pdf');

    move_uploaded_file($file, '../asset/sampul/' . $gambar);
    move_uploaded_file($file_tmp, '../asset/buku/' . $buku);

    $sql = mysqli_query($koneksi, "UPDATE buku SET judul='$judul', penulis='$penulis', penerbit='$penerbit', tahunterbit='$tahunterbit', gambar='$gambar' WHERE id_buku='$id'");

    echo "<script>alert('Buku berhasil di update!');
    document.location='../buku.php';</script>";
}
