<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
	// melakukan pengalihan
	header("location:../login/login.php");
}

include "../config/koneksi.php";

$nama = $_POST['nama_pemasok'];
$tlp = $_POST['tlp_pemasok'];


$insert_data = mysqli_query($koneksi, "INSERT INTO `pemasok` (`id_pemasok`, `nama_pemasok`, `tlp_pemasok`) VALUES (NULL, '$nama', '$tlp')");


// $insert_data = mysqli_query($koneksi, " INSERT INTO tbl_pengasuh(nama_lengkap,alamat,email,no_tlp,kompetensi) VALUES ('$nama','$alamat','$email','$no_tlp','$kompetensi')");

if ($insert_data) {
	header('location:data_pemasok.php?pesan=Data Berhasil Di Simpan');
} else {
	echo mysqli_error($koneksi);
	//header('location:data_pengasuh.php?pesan=Data Gagal Di Simpan');
}