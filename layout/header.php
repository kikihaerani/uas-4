<?php
//session_start();
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

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">


        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">KNET</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="../login/sigout.php">Sigout</a>
                 <a class="nav-link px-3" href="../login/register.php">Daftar</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-6 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-4">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <span data-feather="home"></span><h2>KNET</h2>
                               
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../user/dasboard.php">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../user/data_user.php">
                                <span data-feather="file"></span>
                                Data Pelanggan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../produk/data_produk.php">
                                <span data-feather="shopping-cart"></span>
                                Data produk
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../produk/data_barang.php">
                                <span data-feather="users"></span>
                                Data barang
                            </a>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link" href="../produk/data_pemasok.php">
                                <span data-feather="users"></span>
                                Data pemasok
                            </a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="../produk/data_pengasuh.php">
                                <span data-feather="users"></span>
                                Data pemasang
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../produk/data_pembelian.php">
                                <span data-feather="users"></span>
                                Data pembelian
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="data_seleksi.php">
                                <span data-feather="layers"></span>
                                Layanan Konsumen
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../produk/data_pembayaran.php">
                                <span data-feather="file-text"></span>
                                Data pembayaran
                            </a>
                        </li>
                    </ul>
                     <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Data Penunjang</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="../produk/data_jns_barang.php">
                            <span data-feather="file-text"></span>
                                Data Jenis barang
                            </a>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>
    </div>