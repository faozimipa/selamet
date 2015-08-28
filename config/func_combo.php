<?php

//fungsi combo jenis kelamin
function cjk($nama,$atribut,$terpilih){
    if($terpilih == 'L')
    {
        echo "<div class='form-group'>
                <label for='$nama'>$atribut</label>
                  <select id='$nama' name='$nama' class='form-control' required='required'>
                  <option value='' >$atribut</option>
                  <option value='L' selected='TRUE'>Laki Laki</option>
                  <option value='P'>Perempuan</option>
                  </select>
                  </div>";
    }elseif($terpilih=='P'){
        echo "<div class='form-group'>
                <label for='$nama'>$atribut</label>
                <select id='$nama' name='$nama' class='form-control' required='required'>
                  <option value='' >$atribut</option>
                  <option value='L' >Laki Laki</option>
                  <option value='P' selected='TRUE'>Perempuan</option>
                </select>
              </div>";
    }else{
        echo "<div class='form-group'>
                <label for='$nama'>$atribut</label>
                <select id='$nama' name='$nama' class='form-control' required='required'>
                  <option value='' >$atribut</option>
                  <option value='L' >Laki Laki</option>
                  <option value='P'>Perempuan</option>
                </select>
              </div>";
    }
}

// fungsi combo pendidikan
function cpend($nama,$atribut,$terpilih){
    if($terpilih=='SD'){
        echo "<div class='form-group'>
            <label for='$nama'>$atribut</label>
            <select id='$nama' name='$nama' class='form-control' required='required'>
                            <option value=''>$atribut</option>
                            <option value='SD' selected='TRUE'>Sekolah Dasar</option>
                            <option value='SLTP'>Sekolah Menengah Pertama</option>
                            <option value='SLTA'>Sekolah Menengah Atas</option>
                            <option value='S1'>Perguruan Tinggi S1</option>
                            <option value='S2'>Perguruan Tinggi S2</option>
                            <option value='S3'>Perguruan Tinggi S3</option>
              </select>
            </div>
        ";
    }elseif($terpilih == 'SLTP'){
        echo" <div class='form-group'>
         <label for='$nama'>$atribut</label>
            <select id='$nama' name='$nama' class='form-control' required='required'>
                            <option value=''>$atribut</option>
                            <option value='SD' >Sekolah Dasar</option>
                            <option value='SLTP' selected='TRUE'>Sekolah Menengah Pertama</option>
                            <option value='SLTA'>Sekolah Menengah Atas</option>
                            <option value='S1'>Perguruan Tinggi S1</option>
                            <option value='S2'>Perguruan Tinggi S2</option>
                            <option value='S3'>Perguruan Tinggi S3</option>
              </select>
              </div>
        ";
    }elseif($terpilih=='SLTA'){
        echo "<div class='form-group'>
        <label for='$nama'>$atribut</label>
            <select id='$nama' name='$nama' class='form-control' required='required'>
                            <option value=''>$atribut</option>
                            <option value='SD' >Sekolah Dasar</option>
                            <option value='SLTP'>Sekolah Menengah Pertama</option>
                            <option value='SLTA' selected='TRUE'>Sekolah Menengah Atas</option>
                            <option value='S1'>Perguruan Tinggi S1</option>
                            <option value='S2'>Perguruan Tinggi S2</option>
                            <option value='S3'>Perguruan Tinggi S3</option>
              </select>
              </div>
        ";
    }elseif($terpilih=='S1'){
        echo "<div class='form-group'>
        <label for='$nama'>$atribut</label>
            <select id='$nama' name='$nama' class='form-control' required='required'>
                            <option value=''>$atribut</option>
                            <option value='SD' >Sekolah Dasar</option>
                            <option value='SLTP'>Sekolah Menengah Pertama</option>
                            <option value='SLTA'>Sekolah Menengah Atas</option>
                            <option value='S1' selected='TRUE'>Perguruan Tinggi S1</option>
                            <option value='S2'>Perguruan Tinggi S2</option>
                            <option value='S3'>Perguruan Tinggi S3</option>
              </select>
              </div>
        ";
    }elseif($terpilih=='S2'){
        echo "<div class='form-group'>
        <label for='$nama'>$atribut</label>
            <select id='$nama' name='$nama' class='form-control' required='required'>
                            <option value=''>$atribut</option>
                            <option value='SD' >Sekolah Dasar</option>
                            <option value='SLTP'>Sekolah Menengah Pertama</option>
                            <option value='SLTA'>Sekolah Menengah Atas</option>
                            <option value='S1' >Perguruan Tinggi S1</option>
                            <option value='S2' selected='TRUE'>Perguruan Tinggi S2</option>
                            <option value='S3'>Perguruan Tinggi S3</option>
              </select>
              </div>
        ";
    }elseif($terpilih=='S3'){
        echo "<div class='form-group'>
        <label for='$nama'>$atribut</label>
            <select id='$nama' name='$nama' class='form-control' required='required'>
                            <option value=''>$atribut</option>
                            <option value='SD' >Sekolah Dasar</option>
                            <option value='SLTP'>Sekolah Menengah Pertama</option>
                            <option value='SLTA'>Sekolah Menengah Atas</option>
                            <option value='S1' >Perguruan Tinggi S1</option>
                            <option value='S2'>Perguruan Tinggi S2</option>
                            <option value='S3' selected='TRUE'>Perguruan Tinggi S3</option>
              </select>
              </div>
        ";
    }else{
        echo "<div class='form-group'>
        <label for='$nama'>$atribut</label>
            <select id='$nama' name='$nama' class='form-control' required='required'>
                            <option value=''>$atribut</option>
                            <option value='SD' >Sekolah Dasar</option>
                            <option value='SLTP'>Sekolah Menengah Pertama</option>
                            <option value='SLTA'>Sekolah Menengah Atas</option>
                            <option value='S1' >Perguruan Tinggi S1</option>
                            <option value='S2'>Perguruan Tinggi S2</option>
                            <option value='S3'>Perguruan Tinggi S3</option>
              </select>
              </div>
        ";
    }


}

// fungsi combo sekolah
function csekol($nama,$atribut,$terpilih){
    if($terpilih=='MTs'){
        echo "<div class='form-group'>
            <label for='$nama'>$atribut</label>
            <select id='$nama' name='$nama' class='form-control' required='required'>
                            <option value=''>$atribut</option>
                            <option value='Mts'  selected='TRUE'>Madrasah Tsanawiyah</option>
                            <option value='MA'>Madrasah Aliah</option>
            </select>
            </div>
        ";
    }else{
        echo "<div class='form-group'>
            <label for='$nama'>$atribut</label>
            <select id='$nama' name='$nama' class='form-control' required='required'>
                            <option value=''>$atribut</option>
                            <option value='Mts'>Madrasah Tsanawiyah</option>
                            <option value='MA' selected='TRUE'>Madrasah Aliah</option>
            </select>
            </div>
        ";
    }
}

//fungsi combo nilai
function cnilai($nama,$atribut,$terpilih){
    if($terpilih=='5'){
       echo " <div class='form-group'>
            <label for='$nama'>$atribut</label>
                <select id='$nama' name='$nama' class='form-control' required='required'>
                            <option value='' >Pilih Kriteria:</option>
                            <option value='5' selected='TRUE'>Sangat Baik</option>
                            <option value='4'>Baik</option>
                            <option value='3'>Cukup</option>
                            <option value='2'>Kurang</option>
                            <option value='1'>Sangat Kurang</option>
                </select>
                </div>
            ";
    }elseif($terpilih=='4'){
        echo " <div class='form-group'>
            <label for='$nama'>$atribut</label>
                <select id='$nama' name='$nama' class='form-control' required='required'>
                            <option value='' >Pilih Kriteria:</option>
                            <option value='5' >Sangat Baik</option>
                            <option value='4' selected='TRUE'>Baik</option>
                            <option value='3'>Cukup</option>
                            <option value='2'>Kurang</option>
                            <option value='1'>Sangat Kurang</option>
                </select>
                </div>
            ";
    }elseif($terpilih=='3'){
        echo " <div class='form-group'>
                <label for='$nama'>$atribut</label>
                <select id='$nama' name='$nama' class='form-control' required='required'>
                            <option value='' >Pilih Kriteria:</option>
                            <option value='5' >Sangat Baik</option>
                            <option value='4' >Baik</option>
                            <option value='3' selected='TRUE'>Cukup</option>
                            <option value='2'>Kurang</option>
                            <option value='1'>Sangat Kurang</option>
                </select>
                </div>
            ";
    }elseif($terpilih=='2'){
        echo " <div class='form-group'>
            <label for='$nama'>$atribut</label>
                <select id='$nama' name='$nama' class='form-control' required='required'>
                            <option value='' >Pilih Kriteria:</option>
                            <option value='5' >Sangat Baik</option>
                            <option value='4' >Baik</option>
                            <option value='3' >Cukup</option>
                            <option value='2' selected='TRUE'>Kurang</option>
                            <option value='1'>Sangat Kurang</option>
                </select>
                </div>
            ";
    }elseif($terpilih=='1'){
         echo " <div class='form-group'>
             <label for='$nama'>$atribut</label>
                <select id='$nama' name='$nama' class='form-control' required='required'>
                            <option value='' >Pilih Kriteria:</option>
                            <option value='5' >Sangat Baik</option>
                            <option value='4' >Baik</option>
                            <option value='3' >Cukup</option>
                            <option value='2' >Kurang</option>
                            <option value='1' selected='TRUE'>Sangat Kurang</option>
                </select>
                </div>
            ";
    }else{
        echo " <div class='form-group'>
             <label for='$nama'>$atribut</label>
                <select id='$nama' name='$nama' class='form-control' required='required'>
                            <option value='' >Pilih Kriteria:</option>
                            <option value='5' >Sangat Baik</option>
                            <option value='4' >Baik</option>
                            <option value='3' >Cukup</option>
                            <option value='2' >Kurang</option>
                            <option value='1' >Sangat Kurang</option>
                </select>
                </div>
            ";
    }
}

 