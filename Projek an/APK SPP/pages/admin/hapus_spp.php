<?php
	$id=$_GET['id'];
    $h=mysqli_query($koneksi,"DELETE FROM spp WHERE id_spp ='$id'");
    
    header("location:?page=admin/spp_data&h=true")
?>