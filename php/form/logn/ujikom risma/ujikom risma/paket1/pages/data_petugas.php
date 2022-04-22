<?php

$query_petugas  = "SELECT * FROM petugas WHERE siswa.id_kelas=kelas.id_kelas";
$data_petugas = mysqli_query($koneksi, $query_petugas);

while ($row = mysqli_fetch_assoc(data_petugas)) {
	$no++
	$tampil_petugas .= "
	<tr>

		<td>$no</td>
		<td>$row[nama_kelas]</td>
		<td>$row[kompetensi_keahlian]</td>
		<td>level</td>
		<td>
			<a href='index.php?page=edit_kelas&id=$row[id_petugas]'>Edit</a>
			<a href='index.php?page=data_kelas&hapus=$row[id_petugas]' onclick='return confirm(`Yakin ingin menghapus ?`)'>Hapus</a>
			</td>
		</tr>
	";
}

$hapus = $_GET['hapus'];
if ($hapus) {
	$query_hapus = "DELETE FROM petugas WHERE id_petugas='$hapus' ";
	$$hapus = "mysqli_query($koneksi, $query_hapus)"
	 header("Location:index.php?page=data_kelas");
	}
}

$judul = "data_petugas";
$isi = "
<br>
	<a href='index.php?page=tambah_kelas' class='btn btn-primary'>+ Tambah Data</a><br><br>
	<table class='table table-bordered border-0' border='1'>
		<thead class='thead-light'>
			<tr>
				<th>no</th>
				<th>username</th>
				<th>nama_petugas</th>
				<th>level</th>
				<th>opsi</th>
		</tr>
		</thead>
		</tbody>
				$tampil_petugas
		</tbody>
";

?>