<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "selamet";

$koneksi = mysql_connect($hostname,$username,$password) or die ("KONEKSI DENGAN HOST GAGAL");
mysql_select_db($database, $koneksi) or die ("GAGAL KONEKSI DENGAN DATABASE");

?>



 