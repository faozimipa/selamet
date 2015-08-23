<?php
include ('config/koneksi.php');

$module = $_GET['module'];
$m=$module;
if($m=='home' 
	or $m=='informasi'
	or $m=='bantuan'
 or $m=='login'
	)
{
	include('module/mod_'.$m.'/'.$m.'.php');
}else{
	include('module/mod_error/error_404.php');
}

/**
if($module == 'home'){
    include('module/'.$module.'/'.$module.'.php');
}else if($module == 'user'){
    include('module/'.$module.'/'.$module.'.php');
}else if($module == 'contact'){
    include('module/'.$module.'/'.$module.'.php');
}else{
    echo "page not found hehe";
}
***/


 