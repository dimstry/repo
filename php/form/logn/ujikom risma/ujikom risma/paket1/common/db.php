<?php

$hostname  = "localhost";
$username  = "root";
$password  = "";
$dbname    = "db_spprisma";

$koneksi = mysqli_connect($hostname, $username, $password, $dbname);

if (!$koneksi) {
		die("Database tidak konek");
}

?>