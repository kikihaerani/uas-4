<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
	// melakukan pengalihan
	header("location:../login/login.php");
}

include "../config/koneksi.php";

$nama = $_POST['id_registrasi'];
$produk = $_POST['id_produk'];
$status = $_POST['status'];

$insert_data = mysqli_query($koneksi, "INSERT INTO `pembelianproduk` (`id_pembelian`, `id_produk`, `id_registrasi`, `status`, `created_at`) VALUES (NULL, '$produk', '$nama', '$status', CURRENT_TIMESTAMP)");


// INSERT INTO `pembelianproduk` (`id_pembelian`, `id_produk`, `id_registrasi`, `status`, `created_at`) VALUES (NULL, '$produk', '$nama', '$status', CURRENT_TIMESTAMP)


if ($insert_data) {
	header('location:data_pembelian.php?pesan=Data Berhasil Di Simpan');
} else {
	echo mysqli_error($koneksi);
	//header('location:data_pengasuh.php?pesan=Data Gagal Di Simpan');
}