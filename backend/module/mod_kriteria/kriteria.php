<?php
$act="module/mod_kriteria/act_kriteria.php";

date_default_timezone_set("Asia/Jakarta");
switch($_GET['act'])
{
    case "input":
        $cek = mysql_query("select valid,lihat from nilai_kriteria where id=1");
        $hasil_cek = mysql_fetch_array($cek);
        if($hasil_cek['lihat']=='Y'){
            ?>
            <div class="alert alert-warning" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                <p>Data sudah DIPUBLIKASI. Silahkan DISEMBUNYIKAN terlebih dahulu!</p>
            </div>
            <?php
        }else{
            if($hasil_cek['valid']=='Y'){
                ?> <blink>
                    <div class="alert alert-warning" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>
                        <p>Data kriteria sudah VALID!</p>
                        <p>Berhati-hatilah saat mengganti kriteria nilai</p>
                    </div>
                </blink>
                <?php
            }
            ?>
            <div class="row">
                <form action="<?= $act; ?>?module=kriteria&act=proses" method="POST">
                    <div class="col-md-8">
                        <table class="table table-responsive">
                            <thead>
                            <th></th>
                            <th> C01</th>
                            <th> C02</th>
                            <th> C03</th>
                            <th> C04</th>
                            <th> C05</th>
                            <th> C06</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td> C01</td>
                                <td> <?= nilai('a11', '1', 'N'); ?></td>
                                <td> <?= nilai('a12', '', 'N'); ?></td>
                                <td> <?= nilai('a13', '', 'N'); ?></td>
                                <td> <?= nilai('a14', '', 'N'); ?></td>
                                <td> <?= nilai('a15', '', 'N'); ?></td>
                                <td> <?= nilai('a16', '', 'N'); ?></td>
                            </tr>
                            <tr>
                                <td> C02</td>
                                <td> <?= nilai('a21', '', 'Y'); ?></td>
                                <td> <?= nilai('a22', '1', 'N'); ?></td>
                                <td> <?= nilai('a23', '', 'N'); ?></td>
                                <td> <?= nilai('a24', '', 'N'); ?></td>
                                <td> <?= nilai('a25', '', 'N'); ?></td>
                                <td> <?= nilai('a26', '', 'N'); ?></td>
                            </tr>
                            <tr>
                                <td> C03</td>
                                <td> <?= nilai('a31', '', 'Y'); ?></td>
                                <td> <?= nilai('a32', '', 'Y'); ?></td>
                                <td> <?= nilai('a33', '1', 'N'); ?></td>
                                <td> <?= nilai('a34', '', 'N'); ?></td>
                                <td> <?= nilai('a35', '', 'N'); ?></td>
                                <td> <?= nilai('a36', '', 'N'); ?></td>
                            </tr>
                            <tr>
                                <td> C04</td>
                                <td> <?= nilai('a41', '', 'Y'); ?></td>
                                <td> <?= nilai('a42', '', 'Y'); ?></td>
                                <td> <?= nilai('a43', '', 'Y'); ?></td>
                                <td> <?= nilai('a44', '1', 'N'); ?></td>
                                <td> <?= nilai('a45', '', 'N'); ?></td>
                                <td> <?= nilai('a46', '', 'N'); ?></td>
                            </tr>
                            <tr>
                                <td> C05</td>
                                <td> <?= nilai('a51', '', 'Y'); ?></td>
                                <td> <?= nilai('a52', '', 'Y'); ?></td>
                                <td> <?= nilai('a53', '', 'Y'); ?></td>
                                <td> <?= nilai('a54', '', 'Y'); ?></td>
                                <td> <?= nilai('a55', '1', 'N'); ?></td>
                                <td> <?= nilai('a56', '', 'N'); ?></td>
                            </tr>
                            <tr>
                                <td> C06</td>
                                <td> <?= nilai('a61', '', 'Y'); ?></td>
                                <td> <?= nilai('a62', '', 'Y'); ?></td>
                                <td> <?= nilai('a63', '', 'Y'); ?></td>
                                <td> <?= nilai('a64', '', 'Y'); ?></td>
                                <td> <?= nilai('a65', '', 'Y'); ?></td>
                                <td> <?= nilai('a66', '1', 'N'); ?></td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="col-md-4">
                        <?= button('Submit', 'btn btn-warning', 'Proses'); ?>
                        <?= button('reset', 'btn btn-success', 'Reset'); ?>
                        <?= clink('/backend', 'btn btn-danger', 'Kembali'); ?>
                        <br>
                        <h4 class="label label-warning"> CATATAN :</h4>
                        <br>
                        Mohon tidak mengganti Kriteria secara sembarangan.

                    </div>
                </form>
            </div>
        <?php
        }
        break;
    case "normalisasi":
        $query = "SELECT * FROM nilai_kriteria WHERE id='1'";
        $eksekusi = mysql_query($query);
        $r = mysql_fetch_assoc($eksekusi);
        $aduh = $r['a11'];
        $coba = $r['a12'];
        $t1 = $r['a11'] + $r['a21'] + $r['a31'] + $r['a41'] + $r['a51'] + $r['a61'];
        $t2 = $r['a12'] + $r['a22'] + $r['a32'] + $r['a42'] + $r['a52'] + $r['a62'];
        $t3 = $r['a13'] + $r['a23'] + $r['a33'] + $r['a43'] + $r['a53'] + $r['a63'];
        $t4 = $r['a14'] + $r['a24'] + $r['a34'] + $r['a44'] + $r['a54'] + $r['a64'];
        $t5 = $r['a15'] + $r['a25'] + $r['a35'] + $r['a45'] + $r['a55'] + $r['a65'];
        $t6 = $r['a16'] + $r['a26'] + $r['a36'] + $r['a46'] + $r['a56'] + $r['a66'];
        // metrik yang di normalisasi disimpan dalam session
        $_SESSION['c11'] = norm($r['a11'], $t1);
        $_SESSION['c12'] = norm($r['a12'], $t2);
        $_SESSION['c13'] = norm($r['a13'], $t3);
        $_SESSION['c14'] = norm($r['a14'], $t4);
        $_SESSION['c15'] = norm($r['a15'], $t5);
        $_SESSION['c16'] = norm($r['a16'], $t6);
        $_SESSION['c21'] = norm($r['a21'], $t1);
        $_SESSION['c22'] = norm($r['a22'], $t2);
        $_SESSION['c23'] = norm($r['a23'], $t3);
        $_SESSION['c24'] = norm($r['a24'], $t4);
        $_SESSION['c25'] = norm($r['a25'], $t5);
        $_SESSION['c26'] = norm($r['a26'], $t6);
        $_SESSION['c31'] = norm($r['a31'], $t1);
        $_SESSION['c32'] = norm($r['a32'], $t2);
        $_SESSION['c33'] = norm($r['a33'], $t3);
        $_SESSION['c34'] = norm($r['a34'], $t4);
        $_SESSION['c35'] = norm($r['a35'], $t5);
        $_SESSION['c36'] = norm($r['a36'], $t6);
        $_SESSION['c41'] = norm($r['a41'], $t1);
        $_SESSION['c42'] = norm($r['a42'], $t2);
        $_SESSION['c43'] = norm($r['a43'], $t3);
        $_SESSION['c44'] = norm($r['a44'], $t4);
        $_SESSION['c45'] = norm($r['a45'], $t5);
        $_SESSION['c46'] = norm($r['a46'], $t6);
        $_SESSION['c51'] = norm($r['a51'], $t1);
        $_SESSION['c52'] = norm($r['a52'], $t2);
        $_SESSION['c53'] = norm($r['a53'], $t3);
        $_SESSION['c54'] = norm($r['a54'], $t4);
        $_SESSION['c55'] = norm($r['a55'], $t5);
        $_SESSION['c56'] = norm($r['a56'], $t6);
        $_SESSION['c61'] = norm($r['a61'], $t1);
        $_SESSION['c62'] = norm($r['a62'], $t2);
        $_SESSION['c63'] = norm($r['a63'], $t3);
        $_SESSION['c64'] = norm($r['a64'], $t4);
        $_SESSION['c65'] = norm($r['a65'], $t5);
        $_SESSION['c66'] = norm($r['a66'], $t6);
        // menetapkan bobot
        $b1 = bobot($_SESSION['c11'], $_SESSION['c12'], $_SESSION['c13'], $_SESSION['c14'], $_SESSION['c15'], $_SESSION['c16']);
        $b2 = bobot($_SESSION['c21'], $_SESSION['c22'], $_SESSION['c23'], $_SESSION['c24'], $_SESSION['c25'], $_SESSION['c26']);
        $b3 = bobot($_SESSION['c31'], $_SESSION['c32'], $_SESSION['c33'], $_SESSION['c34'], $_SESSION['c35'], $_SESSION['c36']);
        $b4 = bobot($_SESSION['c41'], $_SESSION['c42'], $_SESSION['c43'], $_SESSION['c44'], $_SESSION['c45'], $_SESSION['c46']);
        $b5 = bobot($_SESSION['c51'], $_SESSION['c52'], $_SESSION['c53'], $_SESSION['c54'], $_SESSION['c55'], $_SESSION['c56']);
        $b6 = bobot($_SESSION['c61'], $_SESSION['c62'], $_SESSION['c63'], $_SESSION['c64'], $_SESSION['c65'], $_SESSION['c66']);
        // mengalikan matrik awal dengan matrik hasil normalisasi menghasilkan nilai max
        $d11 = maksi($r['a11'], $r['a12'], $r['a13'], $r['a14'], $r['a15'], $r['a16'], $b1, $b2, $b3, $b4, $b5, $b6);
        $d21 = maksi($r['a21'], $r['a22'], $r['a23'], $r['a24'], $r['a25'], $r['a26'], $b1, $b2, $b3, $b4, $b5, $b6);
        $d31 = maksi($r['a31'], $r['a32'], $r['a33'], $r['a34'], $r['a35'], $r['a36'], $b1, $b2, $b3, $b4, $b5, $b6);
        $d41 = maksi($r['a41'], $r['a42'], $r['a43'], $r['a44'], $r['a45'], $r['a46'], $b1, $b2, $b3, $b4, $b5, $b6);
        $d51 = maksi($r['a51'], $r['a52'], $r['a53'], $r['a54'], $r['a55'], $r['a56'], $b1, $b2, $b3, $b4, $b5, $b6);
        $d61 = maksi($r['a61'], $r['a62'], $r['a63'], $r['a64'], $r['a65'], $r['a66'], $b1, $b2, $b3, $b4, $b5, $b6);
        // lamdamaks
        $lamdamaks = lamdamaks($d11, $d21, $d31, $d41, $d51, $d61, $b1, $b2, $b3, $b4, $b5, $b6);
        // menentukan ci
        $ci = ci($lamdamaks);
        // menentukan cr
        $cr = cr($ci, rc());
        // cek konsistensi
        $konsisten = konsisten($cr);

        ?>
        <div class="row">
            <div class="col-md-6">
                <?php
                echo "<h3> Matrik Hasil Normalisasi</h3><br>";
                echo " | " . bulat($_SESSION['c11']) . " | " . bulat($_SESSION['c12']) . " | " . bulat($_SESSION['c13']) . " | " . bulat($_SESSION['c14']) . " | " . bulat($_SESSION['c15']) . " | " . bulat($_SESSION['c16']) . " | <b>" . bulat($b1) . "</b> | <b>" . bulat($d11) . "</b> |<br>";
                echo " | " . bulat($_SESSION['c21']) . " | " . bulat($_SESSION['c22']) . " | " . bulat($_SESSION['c23']) . " | " . bulat($_SESSION['c24']) . " | " . bulat($_SESSION['c25']) . " | " . bulat($_SESSION['c26']) . " | <b>" . bulat($b2) . "</b> | <b>" . bulat($d21) . "</b> |<br>";
                echo " | " . bulat($_SESSION['c31']) . " | " . bulat($_SESSION['c32']) . " | " . bulat($_SESSION['c33']) . " | " . bulat($_SESSION['c34']) . " | " . bulat($_SESSION['c35']) . " | " . bulat($_SESSION['c36']) . " | <b>" . bulat($b3) . "</b> | <b>" . bulat($d31) . "</b> |<br>";
                echo " | " . bulat($_SESSION['c41']) . " | " . bulat($_SESSION['c42']) . " | " . bulat($_SESSION['c43']) . " | " . bulat($_SESSION['c44']) . " | " . bulat($_SESSION['c45']) . " | " . bulat($_SESSION['c46']) . " | <b>" . bulat($b4) . "</b> | <b>" . bulat($d41) . "</b> |<br>";
                echo " | " . bulat($_SESSION['c51']) . " | " . bulat($_SESSION['c52']) . " | " . bulat($_SESSION['c53']) . " | " . bulat($_SESSION['c54']) . " | " . bulat($_SESSION['c55']) . " | " . bulat($_SESSION['c56']) . " | <b>" . bulat($b5) . "</b> | <b>" . bulat($d51) . "</b> |<br>";
                echo " | " . bulat($_SESSION['c61']) . " | " . bulat($_SESSION['c62']) . " | " . bulat($_SESSION['c63']) . " | " . bulat($_SESSION['c64']) . " | " . bulat($_SESSION['c65']) . " | " . bulat($_SESSION['c66']) . " | <b>" . bulat($b6) . "</b> | <b>" . bulat($d61) . "</b> |<br>";

                echo "<br> Lamda maks = " . bulat($lamdamaks);
                echo "<br> CI = " . bulat($ci);
                echo "<br> RC 6 = " . rc();
                echo "<br> CR  = " . bulat($cr);
                echo "<br> Konsistensi =" . $konsisten . "<br>";
                echo "<br>";
                ?>
            </div>
            <div class="col-md-6">
                <?php


                if ( $konsisten == 'Konsisten' )
                {
                    ?>
                    <form action="<?= $act; ?>?module=kriteria&act=save&valid=valid" method="post">
                        <?= input('b11', '', 'hidden', $b1, 'Y', 'Y'); ?>
                        <?= input('b21', '', 'hidden', $b2, 'Y', 'Y'); ?>
                        <?= input('b31', '', 'hidden', $b3, 'Y', 'Y'); ?>
                        <?= input('b41', '', 'hidden', $b4, 'Y', 'Y'); ?>
                        <?= input('b51', '', 'hidden', $b5, 'Y', 'Y'); ?>
                        <?= input('b61', '', 'hidden', $b6, 'Y', 'Y'); ?>
                        <?= button('submit', 'btn btn-success', 'SImpan Pengaturan'); ?>
                    </form>
                <?php

                } else
                {
                    echo clink('module/mod_kriteria/act_kriteria.php?module=kriteria&act=save&valid=novalid', 'btn btn-danger', 'Lakukan Penginputan Kriteria Lagi');
                }
                ?>
            </div>
        </div>
    <?php
    break;
}