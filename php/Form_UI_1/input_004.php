<?php
	error_reporting(0);

	$tombol=$_POST['tombol'];
	$var=$_POST['var'];

	if($tombol)
	{
		echo "Warna yang dipilih : $var"; 
	}

	echo "
		<form method='post'>
			<input type='color' name='var' value='$var'>
			<input type='submit' name='tombol' value='Kirim'>
		</form>


	";
?>