<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
    // melakukan pengalihan
    header("location:../login/register.php");
}

include "../config/koneksi.php";

$nama = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];
$tlp = $_POST['tlp'];
$jk = $_POST['jk'];
$nik = $_POST['nik'];
$username =$_POST['username'];
$password = md5($_POST['password']);

$insert_data = mysqli_query($koneksi, "INSERT INTO `registerasi` (`id_registrasi`, `nama_lengkap`, `nik`, `tlp`, `alamat`, `username`, `created_at`, `jk`, `password`) VALUES (NULL, '$nama', '$nik', '$tlp', '$alamat', '$username', CURRENT_TIMESTAMP, '$jk', MD5('$password'))");

// INSERT INTO `registerasi` (`id_registrasi`, `nama_lengkap`, `nik`, `tlp`, `alamat`, `username`, `created_at`, `jk`, `password`) VALUES (NULL, '$nama', '$nik', '$tlp', '$alamat', '$username', CURRENT_TIMESTAMP, '$jk', MD5('$password'))

if ($insert_data) {
    header('location:../admin/dasboard.php?pesan=Data Berhasil Di Simpan');
} else {
   //echo mysqli_error($koneksi);
   header('location:../admin/dasboard.php?pesan=Data Gagal Di Simpan');
}