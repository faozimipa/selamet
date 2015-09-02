<?php
// fungsi jenis kelamin
function jk($simbol){
    if ($simbol == 'L'){
        return "Laki Laki";
    }else{
        return "Perempuan";
    }
}

// fungsi jabatan
function jab($tanda){
    if($tanda=='0'){
        return "Admin";
    }elseif($tanda=='1'){
        return "Kepala Sekolah";
    }elseif($tanda=='2'){
        return "Wakil Kepala Sekolah";
    }else{
        return "Guru";
    }
}


//fungsi tanggal
function tgl($tgl){
    $tanggal = substr($tgl,0,2);
    $bulan = getBulan(substr($tgl,2,2));
    $tahun = substr($tgl,4,4);
    return $tanggal.' '.$bulan.' '.$tahun;
}

function getBulan($bln){
    switch ($bln){
        case 1:
            return "Januari";
            break;
        case 2:
            return "Februari";
            break;
        case 3:
            return "Maret";
            break;
        case 4:
            return "April";
            break;
        case 5:
            return "Mei";
            break;
        case 6:
            return "Juni";
            break;
        case 7:
            return "Juli";
            break;
        case 8:
            return "Agustus";
            break;
        case 9:
            return "September";
            break;
        case 10:
            return "Oktober";
            break;
        case 11:
            return "November";
            break;
        case 12:
            return "Desember";
            break;
    }
}
 