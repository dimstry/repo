<?php

$query_siswa  = "SELECT * FROM siswa, kelas WHERE siswa.id_kelas=kelas.id_kelas";
$data_siswa = mysqli_query($koneksi, $query_siswa);

while ($row = mysqli_fetch_assoc($data_siswa)) {
	$no++;
	$tampil_siswa .= "
		<tr>
			<td>$no</td>
			<td>$row[nisn]</td>
			<td>$row[nis]</td>
			<td>$row[nama]</td>
			<td>$row[id_kelas]</td>
			<td>$row[no_telp]</td>
			<td>
				<a href='index.php?page=edit_siswa&edit=$row[nisn]'>Edit</a> |
				<a href='index.php?page=data_siswa&hapus=$row_siswa[nisn]'>Hapus</a>
			</td>
		</tr>
	";
}

$hapus= $_GET['hapus'];
if ($hapus !=""){
	$query_hapus= "DELETE FROM siswa WHERE nisn= '$hapus'";
	$hps = mysqli_query($koneksi, $query_hapus);
	if ($hps){

		header("Location:index.php?page=data_siswa") ;
	}
}
$judul = "data siswa";
$isi ="

<a href= 'index.php?page=tambah_siswa'>+ Tambah Data</a>
<table border='1' cellpading='12' cellspacing='8'>
	<thead>
		<tr>
			<th>no</th>
			<th>nisn</th>
			<th>nis</th>
			<th>nama</th>
			<th>kelas</th>
			<th>no telp</th>
			<th>opsi</th>
		</tr>
	</thead>
	<tbody>
		$tampil_siswa
	</tbody>
</table>
";

?>