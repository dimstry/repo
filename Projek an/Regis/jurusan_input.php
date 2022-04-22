<?php
error_reporting(0);
include("koneksi.php");

$var01=$_POST['var01'];
$var02=$_POST['var02'];
$tombol=$_POST['tombol'];


if($tombol)
{
	$query_insert="INSERT INTO jurusan (kode_jurusan, nama_jurusan) values('$var01','$var02');";
	mysqli_query($dimas,$query_insert);
}

echo 
"
	<form method='post' autocomplete='off'>
		FORM TAMBAH JURUSAN <P>
		Kode : <input type='text' name='var01'> <P>
		Nama : <input type='text' name='var02'> <P>
		<input type='submit' name='tombol' value='Simpan'>
	</form>
	$coba
";
?>