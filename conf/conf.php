<?php 
$url = "localhost";
$usr = "root";
$pass = "";
$DB = "ctfukmit";
$con = mysql_connect($url,$usr,$pass);
$sdb = mysql_select_db($DB,$con);

if ($con) {
	if ($sdb) {
	}else{
		echo "<script>alert('Database tidak di temukan');</script>";

	}
} else{
		echo "<script>alert('Koneksi Gagal');</script>";

}
 ?>
