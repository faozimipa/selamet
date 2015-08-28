<?php

// fungsi enkripsi
function en($string){
    return base64_encode($string);
}

//fungsi deskripsi
function des($string){
    return base64_decode($string);
}
