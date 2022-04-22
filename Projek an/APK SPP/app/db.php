<?php 

$hostname = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "dbsppku";

$koneksi = mysqli_connect($hostname, $username, $password, $dbname);
if (!$koneksi) {
	die("Database tidak konek");
}

 ?>