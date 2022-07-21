<?php
session_start();
if ($_SESSION['status'] != "sudah_login"){
	//melakukan pengalihan
	header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
$sql = mysqli_query($koneksi, "SELECT * FROM jns_barang");
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3  pb-2 mb-3 border-bottom">
	<h1 class="h2">Data Jenis Barang</h1>
	</div>

	<?php if (isset($_GET['pesan'])) :?>
		<div class="alert alert-succses" role="alert">
		<?php echo $_GET['pesan']; ?>
		</div>
	<?php endif; ?>

	<!--<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

	<!--<h4>Data Jadwal Kegiatan</h4> -->

<a href="tambah_jns_barang.php" class="btn btn-sm btn-primary">Tambah Data</button></a>
	<br><br>
	<div class="table-responsive">
		<table class="table table-striped table-bordered display nowrap" id="example" style="width: 100%">
			<thead class="table-light">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nama Barang</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
		<tbody>
			<?php
			$no = 1;
			while ($rs = mysqli_fetch_assoc($sql)) : ?>
			<tr>
				<td><?= $no; ?></td>
				<td><?= $rs['nama_jns_barang']; ?></td>
			<td>
			<a href="ubah_jns_barang.php?id=<?= $rs['id_jns_barang']; ?>" class="btn btn-info btn-sm">Ubah</a>
			<a href="hapus_jns_barang.php?id=<?= $rs['id_jns_barang']; ?>" class="btn btn-danger btn-sm">Hapus</a>
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
