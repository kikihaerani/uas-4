<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
	// melakukan pengalihan
	header("location:../login/login.php");
}

include "../config/koneksi.php";
$id =$_POST['id_produk'];
$nama = $_POST['nama_produk'];
$harga = $_POST['harga'];

$insert_data = mysqli_query($koneksi, "UPDATE `produk` SET `nama_produk` = '$nama', `harga` = '$harga' WHERE `id_produk` = '$id' ");


if ($insert_data) {
	header('location:data_produk.php?pesan=Data Berhasil Di Simpan');
} else {
	echo mysqli_error($koneksi);
	//header('location:data_pengasuh.php?pesan=Data Gagal Di Simpan');
}