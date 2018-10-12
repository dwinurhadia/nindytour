<?php 
	error_reporting(E_ALL ^ E_DEPRECATED);
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbName = "nindy_ticketing";
	
	$kon = mysqli_connect($host, $user, $pass);
	if(!$kon)
		die("Gagal koneksi");
	
	$hasil = mysqli_select_db($kon, $dbName);
	if(!$hasil) 
		die("Gagal Konek Database");
?>