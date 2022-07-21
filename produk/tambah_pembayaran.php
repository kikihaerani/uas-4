<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
	//melakukan pengalihan
	header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
$sql = mysqli_query($koneksi, "SELECT * FROM pembelianproduk");
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div 
		class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="h2">Tambah Data Barang </h1>
	</div>

	<!-- <canvas class="my-4 w-10" id="myChart" width="900" height="380"></canvas> -->
	<!-- <h4>Data Jadwal Kgiatan</h4> -->
	<div class="table-responsive">
		<form action="simpan_pembayaran.php" method="POST">
			<div class="col-6">
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">ID Pembelian</label>
					<select name="id_pembelian" class="form-control" id="">
						<option value="">pilih ID Pembelian</option>
						<?php
						while ($rs = mysqli_fetch_assoc($sql)) : ?>
						?>
						<option value="<?= $rs['id_pembelian']; ?>"> <?= $rs['id_pembelian']; ?></option>
						<?php endwhile ?>
					</select>
				</div>
				<div class="mb-3">
					<label for="exampleFormControlTextarea1" class="form-label"> Totol Bayar</label>
					<input type="text" name="total_bayar" class="form-control">
				</div>

				<div class="mb-3">
					<button type="submit" class="btn btn-sm btn-primary">Simpan</button>

				</div>
			</div>
		</form>
	</div>
</main>
<?php
	include "../layout/footer.php";
?>