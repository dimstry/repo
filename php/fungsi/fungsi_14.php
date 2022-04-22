<?php
	function DataSiswa($NIS,$Nama,$umur)
	{
		echo "
			Perkenalkan Saya :<br>
			NIS : $NIS <br>
			Nama Lengkap : $Nama <br>
			Usia : $umur Tahun


		";
	}
	DataSiswa("020304","Dimas Triana","18");;
	echo "<hr>";
	DataSiswa("69","Kresna","18");
	
?>