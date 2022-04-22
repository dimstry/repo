<?php

switch ($_SESSION['level']) {
		// menu untuk admin
		case "1";
			$menu = "
			<li class='nav-item-active'>
				<a class='nav-link' href='index.php'>Beranda</a>
			</li>
			<li class='nav-item-active dropdown'>
				<a class='nav-link dropdown-toggle' id='nd' data-toggle='dropdown'>Data</a>
				<div class='dropdown-menu dropdown-menu-right border-0 shadow-sm' aria-labelledby='nd'>
					<a class='dropdown-item' href='index.php?page=data_petugas'>Data Petugas</a>
					<a class='dropdown-item' href='index.php?page=data_siswa'>Data Siswa</a>
					<a class='dropdown-item' href='index.php?page=data_kelas'>Data Kelas</a>
					<a class='dropdown-item' href='index.php?page=data_spp'>Data SPP</a>
				</div>
			</li>
			<li class='nav-item-active'>
				<a class='nav-link' href='index.php?page=entri_transaksi'>Entri Transaksi</a>
			</li>
			<li class='nav-item-active'>
				<a class='nav-link' href='index.php?page=histori'>Histori</a>
			</li>
			
			<li class='nav-item-active dropdown'>
				<a class='nav-link dropdown-toggle' id='nd' data-toggle='dropdown'>$_SESSION[username]</a>
				<div class='dropdown-menu dropdown-menu-right border-0 shadow-sm' aria-labelledby='nd'>
					<a class='dropdown-item' href='index.php?page=ganti_password'>Ganti Password</a>
					<a class='dropdown-item' href='index.php?page=logout'onclick='return confirm(`Yakin ingin logout?`)'>Logout</a>
				</div>
			</li>
			";
		break;

		// menu untuk petugas
		case "2";
			$menu = "
			<li class='nav-item-active'>
				<a class='nav-link' href='index.php'>Beranda</a>
			</li>
			<li class='nav-item-active'>
				<a class='nav-link' href='index.php?page=entri_transaksi'>Entri Transaksi</a>
			</li>
			<li class='nav-item-active'>
				<a class='nav-link' href='index.php?page=histori'>Histori</a>
			</li>
			<li class='nav-item-active dropdown'>
				<a class='nav-link dropdown-toggle' id='nd' data-toggle='dropdown'>$_SESSION[username]</a>
				<div class='dropdown-menu dropdown-menu-right border-0 shadow-sm' aria-labelledby='nd'>
					<a class='dropdown-item' href='index.php?page=ganti_password'>Ganti Password</a>
					<a class='dropdown-item' href='index.php?page=logout'>Logout</a>
				</div>
			</li>
			";
		break;

		case "3";
			$menu = "
			<li class='nav-item-active'>
				<a class='nav-link' href='index.php'>Beranda</a>
			</li>
			<li class='nav-item-active'>
				<a class='nav-link' href='index.php?page=histori'>Histori</a>
			</li>
			<li class='nav-item-active dropdown'>
				<a class='nav-link dropdown-toggle' id='nd' data-toggle='dropdown'>$_SESSION[username]</a>
				<div class='dropdown-menu dropdown-menu-right border-0 shadow-sm' aria-labelledby='nd'>
					<a class='dropdown-item' href='index.php?page=ganti_password'>Ganti Password</a>
					<a class='dropdown-item' href='index.php?page=logout'onclick='return confirm(`Yakin ingin logout`)'>Logout</a>
				</div>
			</li>
			break;

	}
	$menu ="
	<nav class='navbar navbar-expand-lg navbar-light fixed-top bg-white shadow-sm p-3'>
		<div class='container'>
		<a class='navbar-brand' href='#'>Aplikasi SPP</a>
		<button class='navbar-toggler' type=='button' data-toggle='collapse' data-target='#navbarSupportContent'
		aria-controls='navbarSupportContent'aria-expanded='false' aria-label='toggle navigation'>
			<span class='navbar-toggler-icon'></span>
		</button>

		<div class='collapse navbar-collapse' id='navbarSupportContent'>
			<ul class='navbar-nav ml-auto'>
		$menu
		</ul>
		</div>
		</div>
	</nav>
";
?>
