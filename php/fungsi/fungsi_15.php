<?php
	function DataSiswa($NIS,$Nama,$umur)
	{
		return "
			Perkenalkan Saya :<br>
			NIS : $NIS <br>
			Nama Lengkap : $Nama <br>
			Usia : $umur Tahun


		";
	}
	echo DataSiswa("020304","Dimas Triana","18");;
	echo "<hr>";
	echo DataSiswa("69","Kresna","18");
	
?>