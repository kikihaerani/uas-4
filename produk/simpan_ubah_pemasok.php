<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
	// melakukan pengalihan
	header("location:../login/login.php");
}

include "../config/koneksi.php";
$id =$_POST['id_pemasok'];
$nama = $_POST['nama_pemasok'];
$tlp = $_POST['tlp_pemasok'];

$insert_data = mysqli_query($koneksi, "UPDATE `pemasok` SET `nama_pemasok` = '$nama', `tlp_pemasok` = '$tlp' WHERE `id_pemasok` = '$id' ");


if ($insert_data) {
	header('location:data_pemasok.php?pesan=Data Berhasil Di Simpan');
} else {
	echo mysqli_error($koneksi);
	//header('location:data_pengasuh.php?pesan=Data Gagal Di Simpan');
}