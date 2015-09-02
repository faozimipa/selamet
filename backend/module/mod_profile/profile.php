<?php
$act="module/mod_profile/act_profile.php";
switch($_GET['act'])
{
    case "index":
        $id = $_SESSION['username'];
        $query = "SELECT * FROM guru,user WHERE guru.nip='$id' AND user.username='$id'";
        $eksekusi = mysql_query($query);
        $hasil = mysql_fetch_assoc($eksekusi);

        ?>
            <div class="container">
                <div class="panel-body inf-content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center">
                                <img alt="" style="width:150px;" title="" class="img-circle img-thumbnail isTooltip "
                                     src="<?= $alamat_web ?>theme/img/user.png" data-original-title="Usuario">
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
                                            <?= $hasil['tempat_lahir'] . ', ' . tgl($hasil['tanggal_lahir']); ?>
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
                                            <?= jab($hasil['jabatan']); ?>
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
                                            <?= $hasil['mapel']; ?>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                                <div class="col-md-4">
                                    <a href="dashboard.html" class="btn btn-success btn-block">Kembali</a>
                                </div>
                                <div class="col-md-4">
                                    <a href="edit-profile.html" class="btn btn-warning btn-block">Edit</a>
                                </div>
                                <div class="col-md-4">
                                    <a href="edit-password-<?= en($hasil['nip']); ?>-ini.html" class="btn btn-danger btn-block">Edit Password</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php

        break;
    case "editpassword":
        ?>
        <div class="row">
           <div class="col-md-8 col-md-offset-2">
               <form action="<?= $act; ?>?module=profile&act=reset" method="POST">
                    <?= input('password_lama','Password Lama','password','','Y','N'); ?>
                    <?= input('password_baru','Password Baru','password','','Y','N'); ?>
                    <?= input('password_baru_lagi','Ulangi Password Baru','password','','Y','N'); ?>
                    <?= button('submit','btn btn-success btn-block','Update Password'); ?>
               </form>
           </div>
        </div>
        <?php
    break;
    case "edit":
        $id = $_SESSION['username'];
        $query = "SELECT * FROM guru WHERE nip='$id'";
        $eksekusi = mysql_query($query);
        $hasil = mysql_fetch_assoc($eksekusi);
        ?>
        <div class="row">
            <form action="<?= $act; ?>?module=profile&act=save" method="POST">
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
                    <?= input('mapel','Mata Pelajaran','text',$hasil['mapel'],'Y','Y'); ?>
                    <?= button('submit','btn btn-success btn-block','Update'); ?>

                </div>

            </form>
        </div>
    <?php
    break;
}