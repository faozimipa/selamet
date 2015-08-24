<?php

$act="module/mod_guru/act_guru.php";
date_default_timezone_set("Asia/Jakarta");

switch($_GET['act'])
{
    case "list":
        $query = "Select * from guru";
        $eksekusi = mysql_query($query);
        ?>
        <a href='input-guru.html'>
            <button type="button" class="btn btn-info"> Tambahkan Guru </button>
        </a>

        <table class="table table-responsive">
            <thead>
            <th>NIP</th>
            <th>Nama</th>
            <th>Mapel yang diampu</th>
            <th>Action</th>
            </thead>
            <tbody>
            <?php
            while($baris = mysql_fetch_assoc($eksekusi))
            {
                echo "<tr>";
                echo "<td> $baris[nip] </td>";
                echo "<td> $baris[nama] </td>";
                echo "<td> $baris[mapel]</td>";
                echo "<td>

                    <a href='/../backend/media.php?module=guru&act=view&id=$baris[nip]'><i class='glyphicon glyphicon-eye-open'></i> Lihat </a>
                    <a href='/../backend/media.php?module=guru&act=edit&id=$baris[nip]'><i class='glyphicon glyphicon-edit'></i> Edit</a>
                    <a href='$act?module=guru&act=delete&id=$baris[nip]'><i class='glyphicon glyphicon-remove'></i> Hapus</a>

                 </td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
        <?php

    break;

    case'add':
        ?>
        <div class="row">
            <form action="<?= $act; ?>?module=guru&act=input" method="POST">
            <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">NIP</label>
                        <input type="text" class="form-control" name="nip" placeholder="NIP" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama" required="required" />
                    </div>

                    <div class="form-group">
                        <label for="name">Tempat Lahir </label>
                        <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" required="required" />
                    </div>

                     <div class="form-group">
                        <label for="name">Tanggal Lahir </label>
                        <input type="text" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" required="required" />
                    </div>
            </div>
            <div class="col-md-6">


                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select id="subject" name="jenis_kelamin" class="form-control" required="required">
                            <option value="" selected="">Jenis Kelamin:</option>
                            <option value="L">Laki Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="pendidikan">Pendidikan Terahir</label>
                        <select id="subject" name="pendidikan" class="form-control" required="required">
                            <option value="" selected="">Pendidikan Terahir:</option>
                            <option value="SD">Sekolah Dasar</option>
                            <option value="SLTP">Sekolah Menengah Pertama</option>
                            <option value="SLTA">Sekolah Menengah Atas</option>
                            <option value="S1">Perguruan Tinggi S1</option>
                            <option value="S2">Perguruan Tinggi S2</option>
                            <option value="S3">Perguruan Tinggi S3</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="sekolah">Diterima di Instansi</label>
                        <select id="subject" name="sekolah" class="form-control" required="required">
                            <option value="MTs">MTs</option>
                            <option value="MA">MA</option>
                        </select>
                    </div>

                <div class="form-group">
                    <label for="name">Mapel </label>
                    <input type="text" class="form-control" name="mapel" placeholder="Mata Pelajaran yang diampu" required="required" />
                </div>
                <input type=submit class="btn btn-success btn-block" value="Input">


            </div>

            </form>
        </div>

        <?php
   break;

    case 'edit':
       echo "edit disini";
       echo $_GET['id'];
    break;

}