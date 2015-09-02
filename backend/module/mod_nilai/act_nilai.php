<?php
include("/../../../config/koneksi.php");
include("/../../../config/func_kriteria.php");
$module = $_GET['module'];
$act = $_GET['act'];

if($module=='nilai' AND $act=='input' ){
    $cek = mysql_query("SELECT * FROM nilai_guru WHERE nip='$_POST[nip]'");
    $ada = mysql_num_rows($cek);
    if($ada > 0){
        echo "<script>alert('Nilai Sudah Pernah di Input Silahkan ke menu edit jika ingin mengubahnya'); window.location = '/../../backend/daftar-nilai-guru.html'</script>";
    }else{
        $kriteria = "select * from nilai_kriteria where id=1";
        $eksekusi_nk = mysql_query($kriteria);
        $r = mysql_fetch_array($eksekusi_nk);

        //set variabel
        $b1= $r['b11'];
        $b2= $r['b21'];
        $b3= $r['b31'];
        $b4= $r['b41'];
        $b5= $r['b51'];
        $b6= $r['b61'];

        $na = na($_POST['n1'],$_POST['n2'],$_POST['n3'],$_POST['n4'],$_POST['n5'],$_POST['n6'],$b1,$b2,$b3,$b4,$b5,$b6);
        $input = mysql_query("insert into nilai_guru
                set nip = '$_POST[nip]',
                    n1 = '$_POST[n1]',
                    n2 = '$_POST[n2]',
                    n3 = '$_POST[n3]',
                    n4 = '$_POST[n4]',
                    n5 = '$_POST[n5]',
                    n6 = '$_POST[n6]',
                    na = '$na'

              ");
        if($input){
            echo "<script>alert('Nilai berhasil di Input'); window.location = '/../../backend/daftar-nilai-guru.html'</script>";

        }else{
            echo "<script>alert('GAGAL'); window.location = 'index.php'</script>";

        }
    }

}

if($module=='nilai' AND $act=='save' ){
    $kriteria = "select * from nilai_kriteria where id=1";
    $eksekusi_nk = mysql_query($kriteria);
    $r = mysql_fetch_array($eksekusi_nk);

    //set variabel
    $b1= $r['b11'];
    $b2= $r['b21'];
    $b3= $r['b31'];
    $b4= $r['b41'];
    $b5= $r['b51'];
    $b6= $r['b61'];

    $na = na($_POST['n1'],$_POST['n2'],$_POST['n3'],$_POST['n4'],$_POST['n5'],$_POST['n6'],$b1,$b2,$b3,$b4,$b5,$b6);
    $update = mysql_query("UPDATE nilai_guru
                set n1 = '$_POST[n1]',
                    n2 = '$_POST[n2]',
                    n3 = '$_POST[n3]',
                    n4 = '$_POST[n4]',
                    n5 = '$_POST[n5]',
                    n6 = '$_POST[n6]',
                    na = '$na'
                WHERE nip = '$_POST[nip]'
              ");
    if($update){
        echo "<script>alert('Nilai berhasil di Update'); window.location = '/../../backend/daftar-nilai-guru.html'</script>";

    }else{
        echo "<script>alert('GAGAL'); window.location = 'index.php'</script>";

    }
}