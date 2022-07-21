<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
   // melakukan pengalihan
   header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_pemasok = $_POST['id_pemasok'];
$nama = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];

$insert_data = mysqli_query($koneksi, "INSERT INTO `barang` (`id_barang`, `nama_barang`, `jumlah`,`id_pemasok`,`created_at`) VALUES (NULL, '$nama','$jumlah','$id_pemasok', CURRENT_TIMESTAMP) ") ;


// $insert_data = mysqli_query($koneksi, " INSERT INTO tbl_pengasuh(nama_lengkap,alamat,email,no_tlp,kompetensi) VALUES ('$nama','$alamat','$email','$no_tlp','$kompetensi')");

if ($insert_data) {
   header('location:data_barang.php?pesan=Data Berhasil Di Simpan');
} else {
   echo mysqli_error($koneksi);
//header('location:data_barang.php?pesan=Data Gagal Di Simpan');
}