<?php
//mengaktifkan session php
session_start();

include '../config/koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$result = mysqli_query($koneksi, "SELECT * FROM registerasi WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($result);

if ($cek > 0){
   $data = mysqli_fetch_assoc($result);
   $_SESSION['username'] = $username;
   $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
   $_SESSION['status'] = "sudah_login";
   $_SESSION['id_registerasi'] = $data['id_registrasi'];
   header("location:../user/dasboard.php");

} else {
//echo mysqli_error($koneksi);
   header("location:login.php?pesan=gagal Login data tidak ditemukan.");
}