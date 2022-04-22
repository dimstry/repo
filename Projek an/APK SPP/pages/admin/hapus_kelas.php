<?php
	$id=$_GET['id'];
    $h=mysqli_query($koneksi,"DELETE FROM kelas WHERE id_kelas ='$id'");
    
    header("location:?page=admin/kelas_data&h=true")
?>