<?php
include('koneksi.php');
$alamat_web = 'http://selamet.ozi/';
$author = 'Selamet';
$alamat_author ='https://facebook.com/xxx';
$nama_web = 'SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN GURU TELADAN';
$alamat = '';
$logo = '';
$branding = 'SPK';
$footnote = 'Design by <a href='.$alamat_author.'>'.$author.'</a> | Sistem Pendukung Keputusan Pemilihan Guru Teladan | &copy Copyright '.date('Y');

if(!empty($_GET['module']) AND !empty($_GET['act'])){
	$module = $_GET['module'];
	$act = $_GET['act'];
	$title = $act.' '.$module.' | '.$nama_web;
}elseif (!empty($_GET['module'])){
	$module = $_GET['module'];
	$title = $module.' | '.$nama_web;
}else{
	$title = $nama_web;
}