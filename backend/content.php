<?php
include ('/../config/koneksi.php');

$module = $_GET['module'];
$m=$module;
if($m=='dashboard'
	or $m=='guru'
 or $m=='nilai'
	or $m=='profile'
 or $m=='kriteria'
 or $m=='laporan'

	)
{
	include('module/mod_'.$m.'/'.$m.'.php');
}else{
	include('module/mod_error/error_404.php');
}




 