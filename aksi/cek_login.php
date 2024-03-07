 <?php
  session_start();

  include '../koneksi/koneksi.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  $login = mysqli_query($koneksi, "SELECT * from user where username='$username' and password='$password'");
  $cek = mysqli_num_rows($login);

  if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    if ($data['level'] == "admin") {
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "admin";
      echo "<script>alert('Berhasil login sebagai admin');
      document.location='../admin/index_adm.php';</script>";
    } else if ($data['level'] == "petugas") {
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "petugas";
      echo "<script>alert('Berhasil login sebagai petugas');
      document.location='../petugas/index_ptg.php';</script>";
    } else if ($data['level'] == "peminjam") {
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "peminjam";
      echo "<script>alert('Berhasil login sebagai peminjam');
      document.location='../peminjam/index_pmj.php';</script>";
    } else {
      echo "<script>alert('Username atau Password salah');
    document.location='../index.php';</script>";
    }
  }
  ?>