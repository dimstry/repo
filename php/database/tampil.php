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

	$query_select="SELECT * FROM jurusan";
    $tampil=mysqli_query($conn,$query_select);

    foreach ($tampil as $key )
    {
     	$nomor++;
     	$t.="
     	<tbody>
	     	<tr>
				<td>$nomor</td>
				<td>{$key['kode_jurusan']}</td>
				<td>{$key['nama_jurusan']}</td>
				<td> <a href='hapus.php?i={$key['kode_jurusan']}'><i class='glyphicon glyphicon-trash'></i></a> </td>
				<td> <a href='edit.php?i={$key['kode_jurusan']}'><i class='glyphicon glyphicon-user'></i></a> </td>
		
		
			</tr>
		</tbody>
		";
    }



	echo "
		<table border='1' class='table-primary'>
		<thead>
			<tr>
				<th>no</th>
				<th>kode</th>
				<th>Nama Jurusan</th>
				<th>Hapus</th>
				<th>Edit</th>
			</tr>
		<thead>

		 	$t
			
		</table>
		<a href='form_input.php'>tambah</a> <br>
	";
?>

</body>
</html>