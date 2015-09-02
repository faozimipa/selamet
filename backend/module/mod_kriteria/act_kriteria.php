<?php
include("/../../../config/koneksi.php");
include("/../../../config/func_rahasia.php");
include("/../../../config/func_kriteria.php");
$module = $_GET['module'];
$act = $_GET['act'];
$valid = $_GET['valid'];


if($module=='kriteria' AND $act=='proses' ){
    $a11 = bulat($_POST['a11']);
    $a12 = bulat($_POST['a12']);
    $a13 = bulat($_POST['a13']);
    $a14 = bulat($_POST['a14']);
    $a15 = bulat($_POST['a15']);
    $a16 = bulat($_POST['a16']);

    $a21 = bulat(balik($_POST['a12']));
    $a22 = bulat($_POST['a22']);
    $a23 = bulat($_POST['a23']);
    $a24 = bulat($_POST['a24']);
    $a25 = bulat($_POST['a25']);
    $a26 = bulat($_POST['a26']);

    $a31 = bulat(balik($_POST['a13']));
    $a32 = bulat(balik($_POST['a23']));
    $a33 = bulat($_POST['a33']);
    $a34 = bulat($_POST['a34']);
    $a35 = bulat($_POST['a35']);
    $a36 = bulat($_POST['a36']);

    $a41 = bulat(balik($_POST['a14']));
    $a42 = bulat(balik($_POST['a24']));
    $a43 = bulat(balik($_POST['a34']));
    $a44 = bulat($_POST['a44']);
    $a45 = bulat($_POST['a45']);
    $a46 = bulat($_POST['a46']);

    $a51 = bulat(balik($_POST['a15']));
    $a52 = bulat(balik($_POST['a25']));
    $a53 = bulat(balik($_POST['a35']));
    $a54 = bulat(balik($_POST['a45']));
    $a55 = bulat($_POST['a55']);
    $a56 = bulat($_POST['a56']);

    $a61 = bulat(balik($_POST['a16']));
    $a62 = bulat(balik($_POST['a26']));
    $a63 = bulat(balik($_POST['a36']));
    $a64 = bulat(balik($_POST['a46']));
    $a65 = bulat(balik($_POST['a56']));
    $a66 = bulat($_POST['a66']);

    $t='a';
    for ($i=1; $i<=6; $i++){
        for($j=1;$j<=6;$j++){

            if($i>=$j){
                $xx=(1/($_POST[$t.$j.$i]));
                $q1 ="UPDATE nilai_kriteria set $t$i$j='$xx' WHERE id='1'";
                mysql_query("$q1");
            }else
            {
                $yy=$_POST[$t.$i.$j];
                $q ="UPDATE nilai_kriteria set $t$i$j='$yy' WHERE id='1'";
                mysql_query("$q");
            }
        }

    }
    echo "<script>alert('Data Berhasil di Input'); window.location = '/backend/kriteria-normalisasi.html'</script>";

}
if ($module=='kriteria' AND $act=='save'){
    if ($valid=='valid'){
        // simpan bobot
        $query =("update nilai_kriteria set
                    b11='$_POST[b11]',
                    b21='$_POST[b21]',
                    b31='$_POST[b31]',
                    b41='$_POST[b41]',
                    b51='$_POST[b51]',
                    b61='$_POST[b61]',
                    valid ='Y'
                    ");
        $eksekusi = mysql_query($query);
        if ($eksekusi){
            echo "<script>alert('Data Berhasil Disimpan'); window.location = '/backend/setting-laporan.html'</script>";
        }else{
            echo "<script>alert('Data Gagal Disimpan'); window.location = '/backend/input-kriteria.html'</script>";
        }
    }else{
            echo "<script>alert('Data Gagal Disimpan'); window.location = '/backend/input-kriteria.html'</script>";

    }




}