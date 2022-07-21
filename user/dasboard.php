<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
    //melakukan pengalihan
    header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
$sql_1 = mysqli_query($koneksi, "SELECT COUNT(id_registrasi) FROM registerasi");
$sql_2= mysqli_query($koneksi, "SELECT COUNT(id_pembelian) FROM pembelianproduk");
$sql= mysqli_query($koneksi, "SELECT COUNT(id_pembayaran) FROM pembayaran");
// count(registerasi.id_registrasi)
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h4">Selamat Datang : <?php echo $_SESSION['nama_lengkap']; ?></h1>

    </div>

    <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
    <div class="container">
  <div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h1 class="card-title"><th scope="col">Jumlah Pelanggan </th></h1>
            <h2 class="card-subtitle mb-2 text-muted">
            <div class="mb-3">
            <option value="<? = $rs_1['id_registrasi']; ?>"> <td><? = $rs_1['id_registrasi']; ?></td> 10 </option>
            </div>
          </div>
        </div>
    </div>

    <div class="col">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h1 class="card-title"><th scope="col">Jumlah Produk </th></h1>
            <div class="col-6">
            <h2 class="card-subtitle mb-2 text-muted">
            <div class="mb-3">
            <option value="<? = $rs_2['id_pembelian']; ?>"> <td><? = $rs_1['id_pembelian']; ?></td> 4</option>
            </div>
            </div>
          </div>
        </div>
    </div>

    <div class="col">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h1 class="card-title"><th scope="col">Jumlah Pembayaran</th> </h1>
            <h2 class="card-subtitle mb-2 text-muted">
            <div class="mb-3">
            <option value="<? = $rs['id_pembayaran']; ?>"> <td><? = $rs['id_pembayaran']; ?></td> 2 </option>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

    </div>
</main>
<?php
include "../layout/footer.php";
?>
