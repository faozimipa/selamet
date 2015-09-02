<?php
include("/../../../config/koneksi.php");
include("/../../../config/func_rahasia.php");
$module = $_GET['module'];
$act = $_GET['act'];

if($module=='profile' AND $act=='reset' ){
    session_start();
    $id = $_SESSION['username'];
    $iden = en($id);
    $password_lama = $_POST['password_lama'];
    $password_baru = md5($_POST['password_baru']);
    $query = "SELECT * FROM user WHERE username='$id'";
    $eksekusi = mysql_query($query);
    $hasil =mysql_fetch_assoc($eksekusi);

    if( $hasil['password']==md5($password_lama)){
        if($_POST['password_baru'] == $_POST['password_baru_lagi']){
            $update = mysql_query("UPDATE user set password='$password_baru' WHERE username='$id'");
            if($update){
                echo "<script>alert('Password berhasil diubah'); window.location = '/../backend/profile.html'</script>";
            }else{
                echo "<script>alert('Password tidak dapat diubah'); window.location = '/../backend/edit-password-$iden-ini.html'</script>";
            }

        }else{
            echo "<script>alert('Password tidak sama'); window.location = '/../backend/edit-password-$iden-ini.html'</script>";
        }
    }else{
        echo "<script>alert('Password Anda Salah'); window.location = '/../backend/edit-password-$iden-ini.html'</script>";

    }

}

if($module=='profile' AND $act=='save' ){
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
        echo "<script>alert('Data Berhasil diUbah'); window.location = '/backend/profile.html'</script>";
    }else{
        echo "<script>alert('Data Gagal diUbah'); window.location = '/backend/profile.html'</script>";
    }
}