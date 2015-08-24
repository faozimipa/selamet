<?php
include("/../../../config/koneksi.php");
$module = $_GET['module'];
$act = $_GET['act'];

if($module=='nilai' AND $act=='input' ){

    $cek = mysql_query("SELECT * FROM nilai_guru WHERE nip='$_POST[nip]'");
    $ada = mysql_num_rows($cek);
    if($ada > 0){
        echo "<script>alert('Nilai Sudah Pernah di Input Silahkan ke menu edit jika ingin mengubahnya'); window.location = '/../../backend/daftar-nilai-guru.html'</script>";
    }else{
        $input = mysql_query("insert into nilai_guru
                set nip = '$_POST[nip]',
                    kriteria_satu = '$_POST[kriteria_satu]',
                    kriteria_dua = '$_POST[kriteria_dua]',
                    kriteria_tiga = '$_POST[kriteria_tiga]',
                    kriteria_empat = '$_POST[kriteria_empat]',
                    kriteria_lima = '$_POST[kriteria_lima]',
                    kriteria_enam = '$_POST[kriteria_enam]'
              ");
        if($input){
            echo "<script>alert('Nilai berhasil di Input'); window.location = '/../../backend/daftar-nilai-guru.html'</script>";

        }else{
            echo "<script>alert('GAGAL'); window.location = 'index.php'</script>";

        }
    }

}