<?php
include('koneksi.php');

$alamat_web = 'http://selamet.ozi/';
$author = 'Selamet';
$nama_web = 'SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN GURU TELADAN';
$alamat = '';
$logo = '';



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