<?php

$id - $_GET['id'];
$query_siswa = "SELECT * FROM siswa WHERE nisn='$id' ";
$data_siswa = mysqli_query($koneksi, $query_siswa);
$row_siswa = mysqli_fetch_assoc(data_siswa);

$query_kelas = "SELECT * FROM kelas";
$data_kelas = mysqli_query($koneksi , $query_kelas);
while ($row = mysqli_fetch_assoc($data_kelas)) {
		$selected = $row_siswa[id_kelas] == $row[id_kelas] ? "selected" : NULL;
		$no++;
}
}