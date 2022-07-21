 <?php
session_start();
if ($_SESSION['status'] != "sudah_login"){
	//melakukan pengalihan
	header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
$sql = mysqli_query($koneksi, "SELECT produk.nama_produk,registerasi.nama_lengkap,pembelianproduk.id_pembelian,pembayaran.id_pembayaran,pembayaran.total_bayar,pembayaran.tgl_bayar FROM pembayaran INNER JOIN pembelianproduk ON pembelianproduk.id_pembelian=pembayaran.id_pembelian INNER JOIN registerasi ON registerasi.id_registrasi=pembelianproduk.id_registrasi INNER JOIN produk ON produk.id_produk=pembelianproduk.id_produk");


	// SELECT produk.nama_produk,produk.harga,registerasi.nama_lengkap,registerasi.tlp,registerasi.alamat,pembelianproduk.status,pembelianproduk.created_at FROM pembelianproduk INNER JOIN produk ON produk.id_produk=pembelianproduk.id_produk INNER JOIN registerasi ON registerasi.id_registrasi=pembelianproduk.id_registrasi");


// SELECT produk.nama_produk,registerasi.nama_lengkap,pembelianproduk.id_pembelian,pembayaran.id_pembayaran,pembayaran.total_bayar,pembayaran.tgl_bayar FROM pembayaran INNER JOIN pembelianproduk ON pembelianproduk.id_pembelian=pembayaran.id_pembelian INNER JOIN registerasi ON registerasi.id_registrasi=pembelianproduk.id_registrasi INNER JOIN produk ON produk.id_produk=pembelianproduk.id_produk

?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Data Pembelian</h1>
	</div>

	<?php if (isset($GET['pesan'])) : ?>
		<div class="alert alert-succses" role="alert">
			<?php echo $_GET['pesan']; ?>
			</div>
		<?php endif; ?>

	<!-- <canvas class="my-4 w-100" id="myChart" width="900" heigt="380"></canvas -->

	<!-- <h4>Data Jadwal Kegiatan</h4> -->
	<a href="tambah_pembayaran.php" class="btn btn-sm btn-primary">Tambah Pembelian</button></a>
	<br><br>

	<div class="table-responsive">
		<table class="table table-striped table-bordered display nowrap" id="example" style="width:100%">
		<thead class="table-light">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nama Pelanggan</th>
			<th scope="col">Nama produk</th>
			<th scope="col">No Pembelian</th>
			<th scope="col">No Pembayaran</th>
			<th scope="col">Total Bayar</th>
			<th scope="col">Tgl Bayar</th>
			<th scope="col">aksi</th>
		</tr>
		</thead>
		<tbody>
		<?php
			$no = 1;
			while ($rs = mysqli_fetch_assoc($sql)) : ?>
			<tr>
				<td><?= $no; ?></td>
				<td><?= $rs['nama_lengkap']; ?></td>
				<td><?= $rs['nama_produk']; ?></td>
				<td><?= $rs['id_pembelian']; ?></td>
				<td><?= $rs['id_pembayaran']; ?></td>
				<td><?= $rs['total_bayar']; ?></td>
				<td><?= $rs['tgl_bayar']; ?></td>
				<td>
					<a href="hapus_pembayaran.php?id=<?=$rs['id_pembayaran']; ?>" class="btn btn-sm btn-info">hapus</button></a>
				</td>
					
			</tr>
			<?php
				$no++;
				endwhile;
				?>
			</tbody>
				</table>
					</div>
		</main>
		<?php
		include "../layout/footer.php";
		?>