<?php
session_start();
include('/../config/conf.php');
if(!empty($_SESSION['login'])){
    header('location:dashboard.html');
}else{
    header('location:masuk.html');
}


 