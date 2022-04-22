<?php
	$id=$_GET['id'];
    $h=mysqli_query($koneksi,"DELETE FROM petugas WHERE id_petugas ='$id'");
    
    header("location:?page=admin/petugas_data&h=true")
?>