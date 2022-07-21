<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
	// melakukan pengalihan
	header("location:../login/login.php");
}

include "../config/koneksi.php";

$id= $_POST['id_pembelian'];
$total = $_POST['total_bayar'];

$insert_data = mysqli_query($koneksi, "INSERT INTO `pembayaran` (`id_pembayaran`, `id_pembelian`, `total_bayar`, `tgl_bayar`) VALUES (NULL, '$id', '$total', CURRENT_TIMESTAMP)");

	

// INSERT INTO `pembayaran` (`id_pembayaran`, `id_pembelian`, `total_bayar`, `tgl_bayar`) VALUES (NULL, '$id', '$total', CURRENT_TIMESTAMP);



if ($insert_data) {
	header('location:data_pembayaran.php?pesan=Data Berhasil Di Simpan');
} else {
	  echo mysqli_error($koneksi);
//header('location:data_pembayaran.php?pesan=Data Gagal Di Simpan');
}
