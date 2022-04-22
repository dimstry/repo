<?php 
include("koneksi.php");

	$query_hapus="DELETE FROM peserta_didik WHERE NIS ='{$_GET['i']}'";
    $h=mysqli_query($conn,$query_hapus);

	header("location:tampil_peserta_didik.php");
?>