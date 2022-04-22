<?php 
include("koneksi.php");

	$query_hapus="DELETE FROM jurusan WHERE kode_jurusan ='{$_GET['i']}'";
    $h=mysqli_query($conn,$query_hapus);

	header("location:tampil.php");
?>