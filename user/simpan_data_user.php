<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
	// melakukan pengalihan
	header("location:../login/login.php");
}

include "../config/koneksi.php";

$nama = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];
$nik = $_POST['nik'];
$jk = $_POST['jk'];
$tlp = $_POST['tlp'];
$username = $_POST['username'];
$password = $_POST['password'];

$insert_data = mysqli_query($koneksi, "INSERT INTO `registerasi` (`id_registrasi`, `nama_lengkap`, `nik`, `tlp`, `alamat`, `username`, `created_at`, `jk`, `password`) VALUES (NULL, '$nama', '$nik', '$tlp', '$alamat', '$username', CURRENT_TIMESTAMP, '$jk', MD5('$password'))");


// $insert_data = mysqli_query($koneksi, " INSERT INTO tbl_pengasuh(nama_lengkap,alamat,email,no_tlp,kompetensi) VALUES ('$nama','$alamat','$email','$no_tlp','$kompetensi')");
if ($insert_data) {
	header('location:data_user.php?pesan=Data Berhasil Di Simpan');
} else {
	echo mysqli_error($koneksi);
	//header('location:data_pengasuh.php?pesan=Data Gagal Di Simpan');
}