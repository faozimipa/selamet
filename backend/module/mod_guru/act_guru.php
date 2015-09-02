<?php
include("/../../../config/koneksi.php");
include("/../../../config/func_rahasia.php");
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
                    jabatan = 4
              ");
    mysql_query("insert into user
                set username = '$_POST[nip]',
                    password = md5($_POST[tanggal_lahir])
              ");
    echo "<script>alert('Data Berhasil di Input'); window.location = '/backend/daftar-guru.html'</script>";


}

if($module=='guru' AND $act=='save' ){
    //var_export($_POST);

   $update = mysql_query("update guru
                set nama = '$_POST[nama]',
				                tempat_lahir = '$_POST[tempat_lahir]',
				                tanggal_lahir = '$_POST[tanggal_lahir]',
				                jenis_kelamin = '$_POST[jenis_kelamin]',
                    pendidikan = '$_POST[pendidikan]',
                    sekolah = '$_POST[sekolah]',
                    mapel = '$_POST[mapel]'
                where nip ='$_POST[nip]'
              ");
    if($update){
        echo "<script>alert('Data Berhasil diUbah'); window.location = '/backend/daftar-guru.html'</script>";
    }else{
        echo "<script>alert('Data Gagal diUbah'); window.location = '/backend/daftar-guru.html'</script>";
    }

}
if($module=='guru' AND $act=='delete' ){
    $id = des($_GET['id']);
    $delete1 = mysql_query("delete from nilai_guru where nip='$id'");
    $delete2 = mysql_query("delete from user where username='$id'");
    $delete3 = mysql_query("delete from guru where nip='$id'");
    if ($delete1 AND $delete2 AND $delete3){
        echo "<script>alert('Data berhasil diHapus'); window.location = '/backend/daftar-guru.html'</script>";
    }else{
        echo "<script>alert('Data Gagal diHapus'); window.location = '/backend/daftar-guru.html'</script>";
    }

}