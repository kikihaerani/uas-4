<?php
session_start();
if ($_SESSION['status'] != "sudah_login"){
	//melakukan pengalihan
	header("location:../login/login.php");
}
include "../config/koneksi.php";
//error_reporting();
$id = $_POST['id_jns_barang'];
$nama = $_POST['nama_jns_barang'];

//$petugas = $_SESSION['id_[petugas'];

$update_data = mysqli_query($koneksi, "UPDATE `jns_barang` SET `nama_jns_barang` = '$nama' WHERE `jns_barang`.`id_jns_barang` = '$id'");

UPDATE `barang` SET `nama_barang` = 'kabel LAN FTP Outdor 15 Meter', `id_jns_barang` = '5' WHERE `barang`.`id_barang` = 4;

	// UPDATE jns_barang set nama_jns_barang='$nama' where id_jns_barang=$id");

// UPDATE `jns_barang` SET `nama_jns_barang` = '$nama' WHERE `jns_barang`.`id_jns_barang` = '$id';

if ($update_data){
	header('location:data_jns_barang.php?pesan=Data Berhasil Di Ubah');
} else {
	echo ('ERROR' . mysqli_error($koneksi));
	//header('location:data_jns_barang.php?pesan=Data Gagal Di Ubah');
}