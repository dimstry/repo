<?php
	$id=$_GET['id'];
    $h=mysqli_query($koneksi,"DELETE FROM siswa WHERE nisn ='$id'");
    
    header("location:?page=admin/siswa_data&h=true")
?>