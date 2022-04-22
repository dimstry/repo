<?php

	$tbl		=$_POST['tbl'];
	$username	=$_POST['username'];
	$password	=$_POST['password'];

	if($tbl == "login") {

		$query_petugas = "SELECT * FROM petugas WHERE username='$username' AND password='$password' ";
		$login_petugas = mysqli_query($koneksi, $query_petugas);

		$cek_siswa = mysqli_query($koneksi, $query_siswa);
		$cek_petugas = mysqli_query($koneksi, $query_petugas);

		if (mysqli_num_rows($cek_siswa)) {

		$_SESSION['level']    = "3";
		$_SESSION['status']   = true;
		$_SESSION['username'] = $username;

		header("location:index.php");
	}
	else if(mysqli_num_rows($cek_petugas)) {
		$data_petugas = mysqli_fetch_assoc($cek_petugas);
		$_SESSION['username'] = $data_petugas['level'];
		$_SESSION['level']	  = true;
		$_SESSION['status']   = $username;
		header("location:index.php");

	}
	else{
		$alert="<div class='alert alert-danger border-0'>gagal login</div>";
	}
}

?>
	<div class="container "style="margin-top: 100px;">
		<div class="row">
			<div class="col-lg-5 mx-auto">
				<div class="card shadow-sm border-0">
					<div class="card-header bg-white">
						<h5 class="m-0"> APLIKASI PEMBAYARAN SPP</h5>
					</div>
					<div class="card-body">
						<?=$alert;?>
						<form method="POST">
							<div class="form-group">
								<label>username</label>
								<input type="text" name="username" class="form-control">
							</div>
							<div class="form-group">
								<label>passwrod</label>
								<input type="password" name="password" class="form-control">
							</div>
							<input type="submit" name="tbl" value="Login" class="btn btn-primary">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>