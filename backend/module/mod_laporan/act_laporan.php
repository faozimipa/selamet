<?php
include("/../../../config/koneksi.php");
include("/../../../config/func_rahasia.php");
include("/../../../config/func_kriteria.php");
$module = $_GET['module'];
$act = $_GET['act'];


if($module=='laporan' AND $act=='nonpublish'){
    $update = mysql_query("UPDATE nilai_kriteria set lihat='N'");
    if ($update){
        echo "<script>alert('Data Berhasil Disembunyikan'); window.location = '/backend/hasil-penilaian.html'</script>";
    }else{
        echo "<script>alert('Data Gagal Disembunyikan'); window.location = '/backend/hasil-penilaian.html'</script>";

    }

}
if($module=='laporan' AND $act=='publish'){
    $update = mysql_query("UPDATE nilai_kriteria set lihat='Y'");
    if ($update){
        echo "<script>alert('Data Berhasil Di Publikasi'); window.location = '/backend/hasil-penilaian.html'</script>";
    }else{
        echo "<script>alert('Data Gagal Di Publikasi'); window.location = '/backend/hasil-penilaian.html'</script>";

    }

}