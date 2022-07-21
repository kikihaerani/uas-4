 <?php
session_start();
if ($_SESSION['status'] != "sudah_login"){
	//melakukan pengalihan
	header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
$sql= mysqli_query($koneksi, "SELECT pemasok.nama_pemasok,barang.nama_barang,barang.jumlah,barang.created_at FROM barang INNER JOIN pemasok ON pemasok.id_pemasok=barang.id_pemasok");

// "SELECT pemasok.nama_pemasok,barang.nama_barang,barang.jumlah,barang.created_at FROM barang INNER JOIN pemasok ON pemasok.id_pemasok=barang.id_pemasok"

?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Data Barang</h1>
	</div>

	<?php if (isset($GET['pesan'])) : ?>
		<div class="alert alert-succses" role="alert">
			<?php echo $_GET['pesan']; ?>
			</div>
		<?php endif; ?>

	<!-- <canvas class="my-4 w-100" id="myChart" width="900" heigt="380"></canvas -->

	<!-- <h4>Data Jadwal Kegiatan</h4> -->
	<a href="Tambah_barang.php" class="btn btn-sm btn-primary">Tambah Barang</button></a>
	<br><br>

	<div class="table-responsive">
		<table class="table table-striped table-bordered display nowrap" id="example" style="width:100%">
		<thead class="table-light">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nama Pemasok</th>
			<th scope="col">Nama Barang</th>
			<th scope="col">jumlah</th>
			<th scope="col">Tanggal Masuk</th>
			<th scope="col">aksi</th>
		</tr>
		</thead>
		<tbody>
		<?php
			$no = 1;
			while ($rs = mysqli_fetch_assoc($sql)) : ?>
			<tr>
				<td><?= $no; ?></td>
				<td><?= $rs['nama_pemasok']; ?></td>
				<td><?= $rs['nama_barang']; ?></td>
				<td><?= $rs['jumlah']; ?></td>
				<td><?= $rs['created_at']; ?></td>
				<td>
					<a href="hapus_barang.php?id=<? =$rs['id_barang']; ?>" class="btn btn-sm btn-primary">Hapus</button></a>
					<a href="ubah_barang1.php?id=<? =$rs['id_barang']; ?>" class="btn btn-sm btn-info">Ubah</button></a>
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