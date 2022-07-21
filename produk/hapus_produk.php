<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
	// melakukan pengalihan
header("location:../login/login.php");
}
include "../config/koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM `produk` WHERE `id_produk` = $id");

// DELETE FROM `registerasi` WHERE `registerasi`.`id_registrasi` = $id"

if ($query) {
	header('location:data_produk.php?pesan=Data Berhasil Di Hapus');
} else {
	echo mysqli_error($koneksi);
	//header('location:data_user.php?pesan=Data Gagal Di Hapus');
}