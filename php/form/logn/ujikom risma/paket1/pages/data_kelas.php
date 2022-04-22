<?php

$query_kelas  = "SELECT * FROM siswa, kelas WHERE siswa.id_kelas=kelas.id_kelas";
$data_kelas = mysqli_query($koneksi, $query_kelas);

while ($row = mysqli_fetch_assoc(data_kelas)) {
	$no++
	$tampil_kelas .= "
	<tr>

		<td>$no</td>
		<td>$row[nama_kelas]</td>
		<td>$row[kompetensi_keahlian]</td>
		<td>
			<a href='index.php?page=edit_kelas&id=$row[id_kelas]'>Edit</a>
			<a href='index.php?page=data_kelas&hapus=$row[id_kelas]' onclick='return confirm(`Yakin ingin menghapus ?`)'>Hapus</a>
			</td>
		</tr>
	";
}

$hapus = $_GET['hapus'];
if ($hapus) {
	$query_hapus = "DELETE FROM kelas WHERE id_kelas='$hapus' ";
	$$hapus = "mysqli_query($koneksi, $query_hapus)"
	 header("Location:index.php?page=data_kelas");
	}
}

$judul = "data_kelas";
$isi = "
<br>
	<a href='index.php?page=tambah_kelas' class='btn btn-primary'>+ Tambah Data</a><br><br>
	<table class='table table-bordered border-0' border='1'>
		<thead class='thead-light'>
			<tr>
				<th>No.</th>
				<th>Nama Kelas</th>
				<th>Kompetensi Keahlian</th>
				<th>Opsi</th>
				</tr>
			</thead>
		</tbody>
	</table>
";

?>