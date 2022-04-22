<?php 
include("koneksi.php");

	$query_hapus="DELETE FROM Kelas WHERE  kode_kelas ='{$_GET['i']}'";
    $h=mysqli_query($conn,$query_hapus);

	header("location:tampil_kelas.php");
?>