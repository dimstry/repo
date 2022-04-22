<?php

	$query_kelas  = "SELECT * FROM kelas";
	$kelas = mysqli_query($koneksi, $query_kelas);

	while ($row = mysqli_fetch_assoc(($kelas)){

		$tampil.= "<option value=$row[id_kelas]>$row[nama_kelas]</option>";
	}

	$tbl      = $_POST['tbl'];
	$nisn     = $_POST['nisn'];
	$nis      = $_POST['nis'];
	$nama     = $_POST['nama'];
	$kelas    = $_POST['kelas'];
	$no_telp  = $_POST['no_telp'];
	$password = "1234"

	if ($tbl == "simpan") {
		$query_siswa = "INSERT INTO siswa VALUES('$nisn', '$nis', '$nama', '$id_kelas', '$no_telp', '$password')";
		$tambah_siswa = mysqli_query($koneksi, $query_siswa);

		if ($tambah_siswa) {
			header("location:index.php?page=data_siswa");
		}

	}

	$isi = "
		<form method='POST'>

	<input type='text' name='nisn' placeholder='nisn'> <br><br>
	<input type='text' name='nis' placeholder='nis'> <br><br>
	<input type='text' name='nama' placeholder='nama'> <br><br>
	<select name='kelas'> <br><br>
		$tampil
	</select>
	<input type='text' name='no_telp' placeholder='no_telp'> <br><br>
	<input type='submit' name='tbl' value='simpan'> <br><br>
	</form>
	";
?>