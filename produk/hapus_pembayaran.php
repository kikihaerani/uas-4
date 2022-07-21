<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
	// melakukan pengalihan
header("location:../login/login.php");
}

include "../config/koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM `pembayaran` WHERE `pembayaran`.`id_pembayaran` = $id");

//"DELETE FROM `barang` WHERE `barang`.`id_barang` = $id"
// DELETE FROM `registerasi` WHERE `registerasi`.`id_registrasi` = $id"

if ($query) {
	header('location:data_pembayran.php?pesan=Data Berhasil Di Hapus');
} else {
	echo mysqli_error($koneksi);
	//header('location:data_pembayran.php?pesan=Data Gagal Di Hapus');
}