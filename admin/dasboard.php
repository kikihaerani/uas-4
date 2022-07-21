<?php
session_start();
if ($_SESSION['status'] != "sudah_login"){
	//melakukan pengalihan
	header("location:../login/login.php");
}
// include "../layout/header.php";
include "../config/koneksi.php";
$sql = mysqli_query($koneksi, "SELECT * FROM registerasi");
$query_1 = mysqli_query($koneksi, "SELECT id_produk,nama_produk,harga FROM produk WHERE id_produk=id_produk");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>KNET</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/datatable/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../assets/datatable/css/responsive.dataTables.min.css" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="../assets/css/dashboard.css" rel="stylesheet">
</head>

<nav class="navbar bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand">KNET</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <a class="nav-link active" aria-current="page" href="../login/register_user.php">Logout</a>
         <a class="nav-link active" aria-current="page" href="../login/register_user.php">Register</a>
      
    </form>
  </div>
</nav>

<h2 class="item-title">Layanan Produk</h2>
<br><br>
<div class="container">
  <div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <div class="content-5">
            <div class="content-image" ><img src="../assets/img/usaha-wifi-hotspot.PNG" alt="paket Hostspot 200 user" width="100%" height="100%" style="object-fit:cover"/></div>
           <div class="content-title"><span>Paket Hostspot 200 user</span></div>
            <a role="link" href="beli_produk.php" class="btn btn-success btn-sm">Beli</a>
        	</div>
          </div>
        </div>
    </div>

    <div class="col">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
           <div class="content-5">
            <div class="content-image" ><img src="" alt="Access Point ONLI"  width="100%" height="100%" style="object-fit:cover"/></div>
           <div class="content-title"><span>Access Point ONLI- Siap Pakai Full Seting Tp Link CPE220</span></div>
           <a role="link" href="beli_produk.php" class="btn btn-success btn-sm">Beli</a>
        	</div> 
          </div>
        </div>
    </div>

    <div class="col">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
           <div class="content-5">
            <div class="content-image" ><img src="../assets/img/wifi tutorial.PNG" alt="Paket Usaha Wifi Mini" width="100%" height="100%" style="object-fit:cover"/></div>
           <div class="content-title"><span>Paket Usaha Wifi Mini</span></div>
            <a role="link" href="beli_produk.php" class="btn btn-success btn-sm">Beli</a>
        	</div> 
          </div>
        </div>
    </div>
  </div>
</div>

