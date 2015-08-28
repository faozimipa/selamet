<?php

function input($nama,$atribut,$tipe, $value, $wajib,$baca){
  if ($baca=='Y'){
      echo "
                <div class='form-group'>
                     <label for='$nama'>$atribut</label>
                       <input type='$tipe' class='form-control' name='$nama' placeholder='$atribut' required='required' readonly='TRUE' value='$value' />
                </div>
            ";
  }else
  {
      if ( $wajib == 'Y' )
      {
          echo "
                <div class='form-group'>
                     <label for='$nama'>$atribut</label>
                       <input type='$tipe' class='form-control' name='$nama' placeholder='$atribut' required='required' value='$value' />
                </div>
            ";
      } else
      {
          echo "
                <div class='form-group'>
                     <label for='$nama'>$atribut</label>
                       <input type='$tipe' class='form-control' name='$nama' placeholder='$atribut' value='$value' />
                </div>
            ";
      }
  }
}

// fungsi submit
function button($tipe,$css,$value){
    echo "
    <input type='$tipe' id='$tipe' class='$css' value='$value'>
    ";
}

function buttonajax($tipe,$css,$value){
    echo "
    <button  id='$tipe' class='$css'>$value</button>
    ";
}

// fungsi combo
function combo2($nama,$atribut,$wajib, $op1,$op2){
   if ($wajib=='Y')
   {
       echo " <div class=form-group'>
                        <label for='$nama'>$atribut</label>
                        <select id='$nama' name='$nama' class='form-control' required='required'>
                            <option value=''>$atribut</option>
                            <option value=''>$op1</option>
                            <option value=''>$op2</option>
                        </select>
                    </div>
                    ";
   }else{
       echo " <div class=form-group'>
                        <label for='$nama'>$atribut</label>
                        <select id='$nama' name='$nama' class='form-control'>
                            <option value=''>$atribut</option>
                            <option value=''>$op1</option>
                            <option value=''>$op2</option>
                        </select>
                    </div>
                    ";
   }
}

// fungsi link
function clink($url,$css,$text){
    echo "<a href='$url' class='$css'>$text </a>";

}
 