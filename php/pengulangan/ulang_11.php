<?php
	$no=0;
	$array_siswa=array(
		array("Dimas","RPL","kel.A"),
		array("Fajar","RPL","kel.A"),
		array("Fiko","RPL","kel.A"),
		array("Kresna","RPL","kel.A"),
		array("Gilang","RPL","kel.A"),
	);
	$jumlah_array=count($array_siswa);//menghitung jumlah data array
	for ($a=0; $a <$jumlah_array ; $a++)
	{ 
		$no++;

		$jumlah_array1=count($array_siswa[$a]);//menghitung jumlah data array
		echo "$no. ";
		for($b=0;$b<$jumlah_array1;$b++)
		{
			echo"{$array_siswa[$a][$b]}, ";
		}
		echo "<br>";
	} 


?>