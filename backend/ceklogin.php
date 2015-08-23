<?php
include('/../config/koneksi.php');
$username = $_POST['username'];
$pass     = md5($_POST['password']);

$login = mysql_query("SELECT * FROM user,guru WHERE user.username='$username' AND user.password='$pass' AND guru.nip='$username'");
$ketemu = mysql_num_rows($login);
$r = mysql_fetch_array($login);

if ($ketemu > 0){
    session_start();
    $_SESSION[username] = $r[username];
    $_SESSION[nama] = $r[nama];
    $_SESSION[level] = $r[jabatan];
    $_SESSION[password] = $r[password];
    $_SESSION[sekolah] = $r[sekolah];
    $_SESSION[login] = 1;

    header('location:dashboard.html');
}
else{
    echo "ora ono user iki";
}
 