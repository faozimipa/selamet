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

 