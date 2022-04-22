<?php
	$tombol=$_POST['tombol'];
	$var=$_POST['var'];

	if($tombol)
	{
		echo "Nama anda adalah : ".$var; 
	}

	echo "
		<form method='post'>
			Nama :
			<input type='text' nama='var' value='$var'>
			<input type='submit' name='tombol' value='kirim'>
		</form>


	";

?>