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
            <th>Aksi</th>
            </thead>
            <tbody>
            <?php
            while($baris = mysql_fetch_assoc($eksekusi))
            {
                echo "<tr>";
                echo "<td> $baris[nip] </td>";
                echo "<td> $baris[nama] </td>";
                echo "<td> $baris[mapel]</td>";
                $id = en($baris['nip']);
                echo "<td>

                    <a href='lihat-guru-$id-ini.html'><i class='glyphicon glyphicon-eye-open'></i> Lihat </a>
                    <a href='edit-guru-$id-ini.html'><i class='glyphicon glyphicon-edit'></i> Edit</a>
                    <a href='$act?module=guru&act=delete&id=$id'><i class='glyphicon glyphicon-remove'></i> Hapus</a>

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
                     <?= input('nip','NIP','text','','Y','N');?>
                     <?= input('nama','Nama','text','','Y','N');?>
                     <?= input('tempat_lahir','Tempat Lahir','text', '','Y','N');?>
                     <?= input('tanggal_lahir','Tanggal Lahir','text','','Y','N');?>
            </div>
            <div class="col-md-6">
                    <?= cjk('jenis_kelamin','Jenis Kelamin','');?>
                    <?= cpend('pendidikan','Pendidikan Terakhir','');?>
                    <?= combo2('sekolah','Diterima di Sekolah','Y','Mts','MA');?>
                    <?= input('mapel', 'Mata Pelajaran','text','','Y','N'); ?>
                    <?= button('submit','btn btn-success btn-block','INPUT');?>
            </div>

            </form>
        </div>

        <?php
   break;
    case 'view':
            $id = des($_GET['id']);
            $query = "SELECT * FROM guru WHERE nip='$id'";
            $eksekusi = mysql_query($query);
            $hasil = mysql_fetch_assoc($eksekusi);
         ?> <div class="container">
            <div class="panel-body inf-content">
                <div class="row">
                    <div class="col-md-4">
                       <div class="text-center">
                           <img alt="" style="width:150px;" title="" class="img-circle img-thumbnail isTooltip " src="<?= $alamat_web?>theme/img/user.png" data-original-title="Usuario">
                       </div>
                        <ul title="Ratings" class="list-inline ratings text-center">
                            <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <strong>Information</strong><br>
                        <div class="table-responsive">
                        <table class="table table-condensed table-responsive table-user-information">
                            <tbody>
                                <tr>
                                    <td>
                                        <strong>
                                            <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                            NIP
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?= $hasil['nip']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <span class="glyphicon glyphicon-user  text-primary"></span>
                                            Nama
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?= $hasil['nama']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <span class="glyphicon glyphicon-cloud text-primary"></span>
                                            Tempat, Tanggal Lahir
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                            <?= $hasil['tempat_lahir'].', '.tgl($hasil['tanggal_lahir']); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <strong>
                                            <span class="glyphicon glyphicon-bookmark text-primary"></span>
                                            Jenis Kelamin
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                            <?= jk($hasil['jenis_kelamin']); ?>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <strong>
                                            <span class="glyphicon glyphicon-eye-open text-primary"></span>
                                            Jabatan
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                            <?= jab($hasil['jabatan']);?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <span class="glyphicon glyphicon-envelope text-primary"></span>
                                            Mata Pelajaran yang diampu
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?= $hasil['mapel'];?>
                                    </td>
                                </tr>

                              </tbody>
                        </table>
                            <div class="col-md-3">
                                <a href="daftar-guru.html" class="btn btn-success btn-block" >Kembali</a>
                            </div>
                            <div class="col-md-3">
                                <a href="edit-guru-<?= en($hasil['nip']);?>-ini.html" class="btn btn-warning btn-block" >Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    <?php
    break;
    case 'edit':
        $id = des($_GET['id']);
        $query = "SELECT * FROM guru WHERE nip='$id'";
        $eksekusi = mysql_query($query);
        $hasil = mysql_fetch_assoc($eksekusi);
       ?>
        <div class="row">
            <form action="<?= $act; ?>?module=guru&act=save" method="POST">
                <div class="col-md-6">
                    <?= input('nip','NIP','text',$hasil['nip'],'Y','Y'); ?>
                    <?= input('nama','Nama','text',$hasil['nama'],'Y','N'); ?>
                    <?= input('tempat_lahir','Tempat Lahir','text',$hasil['tempat_lahir'],'Y','N'); ?>
                    <?= input('tanggal_lahir','Tanggal_lahir','text',$hasil['tanggal_lahir'],'Y','N'); ?>
                </div>
                <div class="col-md-6">
                        <?= cjk('jenis_kelamin','Jenis Kelamin', $hasil['jenis_kelamin']); ?>
                        <?= cpend('pendidikan','Pendidikan Terahir',$hasil['pendidikan']); ?>
                        <?= csekol('sekolah','Diterima di Instansi', $hasil['sekolah']); ?>
                        <?= input('mapel','Mata Pelajaran','text',$hasil['mapel'],'Y','N'); ?>
                        <?= button('submit','btn btn-success btn-block','Update'); ?>

                </div>
            </form>
        </div>
       <?php
    break;
}