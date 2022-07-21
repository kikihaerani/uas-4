<?php
session_start();
if($_SESSION['pesan'] !="sudah_login") {
	header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM registerasi WHERE id=$id");
$rs = mysqli_fetch_assoc($query);
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">From Data Pengasuh</h1>
	</div>

	<div class="table-responsive">
		<form action="simpan_ubah_user.php" method="POST">
			<div class="col-6">
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
					<input type="text" name="nama_lengkap"  value="<?=$rs['nama_lengkap'];?>" class="form-control">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlTextarea1" class="form-label">NIK</label>
					<input type="text" name="nik" value="<?=$rs['nik'];?>" class="form-control">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
					<input type="text" name="alamat"  value="<?=$rs['alamat'];?>class="form-control">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlTextarea1" class="form-label">No Tlp/Hp</label>
					<input type="text" name="tlp" value="<?=$rs['tlp'];?> class="form-control">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlTextarea1" class="form-label" id="">Jenis Kelamin</label>
					<select name="Kompetensi" class="form-control" id="">
						<option value="<?=$rs['jk'];?>"><?=$rs['jk'];?></option>
						<option value=" Perempuan"> Perempuan</option>
						<option value=" Laki-Laki"> Laki-Laki</option>
					</select>
				</div>
				<div class="mb-3">
					<label for="exampleFormControlTextarea1" class="form-label">Username</label>
					<input type="text" name="username"  value="<?=$rs['username'];?>class="form-control">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlTextarea1" class="form-label">Password</label>
					<input type="text" name="password"  value="<?=$rs['password'];?>class="form-control">
				</div>

				<input type="hidden"  value="<?=$id; ?>" name="id_registrasi" id="">
				<div class="mb-3">
					<button type="submit" class="btn btn-sm btn-primary"> Simpan</button>
				</div>
			</div>
		</form>
	</div>
</main>
<?php
	include "../layout/footer.php";
?>