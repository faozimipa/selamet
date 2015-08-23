<?php
include("/../../../config/koneksi.php");
$module = $_GET['module'];
$act = $_GET['act'];

if($module=='guru' AND $act=='input' ){
    //var_export($_POST);

    mysql_query("insert into guru
                set nip = '$_POST[nip]',
                    nama = '$_POST[nama]',
                    tempat_lahir = '$_POST[tempat_lahir]',
                    tanggal_lahir = '$_POST[tanggal_lahir]',
					               jenis_kelamin = '$_POST[jenis_kelamin]',
                    pendidikan = '$_POST[pendidikan]',
                    sekolah = '$_POST[sekolah]',
                    mapel = '$_POST[mapel]',
                    jabatan = 3
              ");
    mysql_query("insert into user
                set username = '$_POST[nip]',
                    password = md5($_POST[tanggal_lahir])
              ");
    echo "<script>alert('Data Berhasil di Input'); window.location = '/backend/daftar-guru.html'</script>";


}

if($module=='user' AND $act=='save' ){
    //var_export($_POST);
    mysql_query("update user
                set username = '$_POST[username]',
                    password = '$_POST[password]',
                    nama = '$_POST[nama]',
					jenis_kelamin = '$_POST[jenis_kelamin]',
                    asal = '$_POST[asal]'
                where id='$_POST[id]'
              ");
    header('location:../../media.php?module='.$module.'&act=index');
}
if($module=='guru' AND $act=='delete' ){
    mysql_query("delete from user where username='$_GET[id]'");
    mysql_query("delete from guru where nip='$_GET[id]'");

    header('location:/../backend/daftar-guru.html');
}