
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

$insert_data = mysqli_query($koneksi, "UPDATE `registerasi` SET `nama_lengkap` ='$nama' , `nik` = '$nik', `tlp` = '$tlp', `alamat` = '$alamat', `username` = '$username', `jk` = '$jk', `password` = MD5('$password') WHERE `registerasi`.`id_registrasi` = '$id'");


	// INSERT INTO `registerasi` (`id_registrasi`, `nama_lengkap`, `nik`, `tlp`, `alamat`, `username`, `created_at`, `jk`, `password`) VALUES (NULL, '$nama', '$nik', '$tlp', '$alamat', '$username', CURRENT_TIMESTAMP, '$jk', MD5('$password'))"

// UPDATE `registerasi` SET `nama_lengkap` ='$nama' , `nik` = '$nik', `tlp` = '$tlp', `alamat` = '$alamat', `username` = '$username', `jk` = '$jk', `password` = MD5('$password') WHERE `registerasi`.`id_registrasi` = '$id';

if ($insert_data) {
    header('location:../user/data_user.php?pesan=Data Berhasil Di Simpan');
} else {
   //echo mysqli_error($koneksi);
   header('location:../user/data_user.php?pesan=Data Gagal Di Simpan');
}