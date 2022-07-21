<?php
session_start();
if ($_SESSION['status'] != "sudah_login"){
	//melakukan pengalihan
	header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";

?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Form  Data Pelanggan</h1>

	</div>

	<!--<canvas class="my-4 w-100" id="myChart" width="900" heigt="380"</canvas> -->

	<!-- <h4>Data Jadwal Kegiatan</h4> -->
	<div class="table-responsive">
	<form action="simpan_data_user.php" method="POST">
		<div class="col-6">
			<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
			<input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap..">
			</div>

			<div class="mb-3">
			<label for="exampleFormControlTextarea1" class="form-label">NIK</label>
			<input type="text" name="nik" class="form-control" placeholder="nik">
			</div>

			<div class="mb-3">
			<label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
			<input type="text" name="alamat" class="form-control" placeholder="Alamat">
			</div>

			<div class="mb-3">
			<label for="exampleFormControlTextarea1" class="form-label">jenis Kelamin</label>
			<select name="jk" class="form-control" id="">
				<option value="">Pilih Jenis Kelamin </option>
				<option value="perempuan">perempuan</option>
				<option value="laki-laki">Laki-laki</option>
				
			</select>
			</div>

			<div class="mb-3">
			<label for="exampleFormControlTextarea1" class="form-label">No Telpon</label>
			<input type="text" name="tlp" class="form-control" placeholder="No lp">
			</div>

			<div class="mb-3">
			<label for="exampleFormControlTextarea1" class="form-label">Username</label>
			<input type="text" name="username" class="form-control" placeholder="Username">
			</div>

			<div class="mb-3">
			<label for="exampleFormControlTextarea1" class="form-label">Password</label>
			<input type="text" name="password" class="form-control" placeholder="Password">
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





