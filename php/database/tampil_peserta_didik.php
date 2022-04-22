<!DOCTYPE html>
<html>
<head>
	<title>Tampil</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

<style>
table {
  border-collapse: collapse;
  width:100%;
  background-color: #D6EEEE;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #D6EEEE;
}
</style>


<?php
	error_reporting(0);
	include("koneksi.php");

	$query_select="SELECT * FROM peserta_didik";
    $tampil=mysqli_query($conn,$query_select);

    foreach ($tampil as $key )
    {
     	$nomor++;
     	$t.="
     	<tbody>
	     	<tr>
				<td>$nomor</td>
				<td>{$key['NIS']}</td>
				<td>{$key['Nama']}</td>
				<td>{$key['Gender']}</td>
				<td>{$key['Tempat_Lahir']}</td>
				<td>{$key['Tgl_Lahir']}</td>
				<td>{$key['kode_jurusan']}</td>
				<td>{$key['kode_kelas']}</td>
				<td> <a href='hapus_ps.php?i={$key['NIS']}'><i class='glyphicon glyphicon-trash'></i></a> </td>
				<td> <a href='edit_peserta_didik.php?i={$key['NIS']}'><i class='glyphicon glyphicon-user'></i></a> </td>
		
			</tr>
		</tbody>
		";
    }

 
	echo "
		<table border='1'>
		<thead>
			<tr>
				<th>No</th>
				<th>NIS</th>
				<th>Nama</th>
				<th>Gender</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>kode_jurusan</th>
				<th>kode_kelas</th>
				<th>hapus</th>
				<th>edit</th>
			</tr>
		<thead>

		 	$t
			
		</table>

		<a href='peserta_didik_input.php'>tambah</a> <br>
	";

?>