<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Pembayaran SPP</title>
</head>
<body>
	<?php
		// error_reporting(0);
		session_start();

		include("common/db.php");

		if ($_SESSION['status']) {
			// sudah ada sesi status
			
		}
		else{
			// ketika tidak ada sesi
	include("Template/form_login.php");
		}

	?>


</body>
</html>