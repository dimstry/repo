<?php
	function Produk($NamaProduk, $Harga, $Lokasi, $QtyJual)
	{
		return "
			<div style='width:150px;height-min:200px;border:1px solid #d3d3d3;float:left;margin:5px'>
				<center>
					<div style='width:98%;height-min:120px;border:1px solid #e3e3e3;background:#eeeeee;text-align:center'>
						<div style='font-family:verdana;color:#a6a6a6;margin-top:40px'>PHOTO</div>
					</div>
				</center>

				<div style='width:98%; padding:5px; font-family:verdana; color:#b1b1b1; font-size:12px'>
					$NamaProduk
				</div>

				<div style='width:98%; padding:0px 5px 0px 5px; font-family:verdana; color:#868686; font-size:12; font-weight:bold'>
					Rp. $Harga
				</div>

				<div style='width:98%; padding:5px; font-family:verdana; color:#b1b1b1; font-size:12px'>
					&reg; $Lokasi
				</div>

				<div style='width:98%; padding:5px; font-family:verdana; color:#b1b1b1; font-size:12px'>
					&plusmn; Terjual $QtyJual
				</div>
			</div>
		";
	}

	//cara menggunakan
	echo Produk("Vivo", "1.200.000", "Jakarta", "23"). Produk("Xiaomi", "2.100.000", "Subang", "13"). Produk("Notebook 1", "5.000.000", "Bandung", "6");
?>