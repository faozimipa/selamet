<?php

function nilai($nama,$value,$disabel){
    if($disabel=='N')
    {
        if ( !empty($value) )
        {
            ?>
            <select id="<?= $nama; ?>" name="<?= $nama; ?>" class="form-control">
                <option value="<?= $value; ?>" selected="TRUE"><?= $value; ?></option>
            </select>
        <?php } else
        { ?>
            <select id="<?= $nama; ?>" name="<?= $nama; ?>" class="form-control">
                <option value="">Pilih</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="0.5">1/2</option>
                <option value="0.33333">1/3</option>
                <option value="0.25">1/4</option>
                <option value="0.2">1/5</option>
                <option value="0.166666">1/6</option>
                <option value="0.142857">1/7</option>
                <option value="0.125">1/8</option>
                <option value="0.11111">1/9</option>
            </select>
        <?php
        }
    }else{
        ?>
        <select id="<?= $nama; ?>" name="<?= $nama; ?>" class="form-control">
            <option value=""></option>
        </select>
        <?php
    }
}

// function pembulatan
    function bulat($nilai){
      return round($nilai,4);
    }
    function balik($nilai){
        return 1/$nilai;
    }
function e($var){
    return $var;

}
//normalisasi
function norm($nilai,$jum){
    $h = ($nilai/$jum);
    return $h;

}
//pembobotan
function bobot($n1,$n2,$n3,$n4,$n5,$n6){
    $r = ($n1 + $n2 + $n3 + $n4 + $n5 + $n6)/6;
    return $r;
}

// nilaimaksimal
function maksi($n1,$n2,$n3,$n4,$n5,$n6,$b1,$b2,$b3,$b4,$b5,$b6){
    $h = ($n1*$b1) + ($n2*$b2) + ($n3*$b3) + ($n4*$b4) + ($n5*$b5) + ($n6*$b6);
    return $h;
}
//lamda maks
function lamdamaks($n1,$n2,$n3,$n4,$n5,$n6,$b1,$b2,$b3,$b4,$b5,$b6){
    $h = (($n1/$b1) + ($n2/$b2) + ($n3/$b3) + ($n4/$b4) + ($n5/$b5) + ($n6/$b6))/6;
    return $h;
}
// menentukan ci
function ci($nilai){
    $h = ($nilai - 6)/6;
    return $h;

}
// menentukan RC 6
function rc(){
    return 1.24;
}
// fungsi cr
function cr($A,$B){
    $h = $A/$B;
    return $h;
}
// menentukan konsistensi
function konsisten($nilai){
    if($nilai <= 0.10){
        return 'Konsisten';
    }else{
        return 'Tidak Konsisten';
    }
}

//menentukan nilai akhir guru
 function na($n1,$n2,$n3,$n4,$n5,$n6,$b1,$b2,$b3,$b4,$b5,$b6){
     $h = ((exp($b1 * log($n1))) * (exp($b2 * log($n2))) * (exp($b3 * log($n3))) * (exp($b4 * log($n4))) * (exp($b5 * log($n5))) * (exp($b6 * log($n6))));
     return $h;
 }



