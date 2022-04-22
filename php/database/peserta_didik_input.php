<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Input Peserta didik</title>
  </head>
  <body>

<?php
	error_reporting(0);
	include("koneksi.php");

	$var01=$_POST['var01'];
	$var02=$_POST['var02'];
	$var03=$_POST['var03'];
	$var04=$_POST['var04'];
	$var05=$_POST['var05'];
	$var06=$_POST['var06'];
	$var07=$_POST['var07'];
	$tombol=$_POST['tombol'];


	//ini untuk pilihan jurusan
	$query_jurusan="SELECT * FROM jurusan";
	$hasil_jurusan=mysqli_query($conn,$query_jurusan);
	foreach($hasil_jurusan as $arr_hasil_jurusan)
	{
		$data_jurusan.="<option value='{$arr_hasil_jurusan['kode_jurusan']}'> {$arr_hasil_jurusan['nama_jurusan']} </option>";
	}
	//selesai jurusan

	//ini untuk pilihan kelas
	$query_kelas="SELECT * FROM kelas";
	$hasil_kelas=mysqli_query($conn,$query_kelas);
	foreach($hasil_kelas as $arr_hasil_kelas)
	{
		$data_kelas.="<option value='{$arr_hasil_kelas['kode_kelas']}'> {$arr_hasil_kelas['nama_kelas']} </option>";
	}
	//selesai kelas

	 if($tombol)
    {
         $query_insert="INSERT INTO peserta_didik VALUES ('$var01','$var02','$var03','$var04','$var05','$var06','$var07')";
         $h=mysqli_query($conn,$query_insert);
         if($h)
         {
         echo "Data berhasil disimpan <br>";
         }
         else
         {
             echo "Data gagal disimpan <br>";
         }
    }
   
	echo "
		<form method='post'>
			NIS : <input type='text' name='var01'><p>
			NAMA : <input type='text' name='var02'><p>
			GENDER : 
				<input type='radio' name='var03' value='L' checked> Laki-laki
				<input type='radio' name='var03' value='P'> Perempuan
				<p>
			TEMPAT LAHIR : <input type='text' name='var04'><p>
			TANGGAL LAHIR : <input type='text' name='var05' placeholder='yyyy-mm-dd'><p>
			JURUSAN : 
				<select name='var06'>
					<option value='kode_jurusan'> - - Pilih - - </option>
					$data_jurusan
				</select>
				<p>
			KELAS : 
				<select name='var07'>
					<option value='kode_kelas'> - - Pilih - - </option>
					$data_kelas
				</select>
				<p>
			<input type='submit' name='tombol' value='Simpan'>
		</form>
		<a href='tampil_peserta_didik.php'>tambah</a> <br>
	";
?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>