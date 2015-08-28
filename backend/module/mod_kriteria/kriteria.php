<?php
$act="module/mod_kriteria/act_kriteria.php";

date_default_timezone_set("Asia/Jakarta");
switch($_GET['act'])
{
    case "input":
     ?>
        <div class="row">
            <form action="<?= $act; ?>?module=kriteria&act=proses" method="POST">
            <div class="col-md-8">
                <table class="table table-responsive">
                    <thead>
                        <th> </th>
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
                            <td> <?= nilai('a11','1','N');?></td>
                            <td> <?= nilai('a12','','N');?></td>
                            <td> <?= nilai('a13','','N');?></td>
                            <td> <?= nilai('a14','','N');?></td>
                            <td> <?= nilai('a15','','N');?></td>
                            <td> <?= nilai('a16','','N');?></td>
                        </tr>
                        <tr>
                            <td> C02</td>
                            <td> <?= nilai('a21','','Y');?></td>
                            <td> <?= nilai('a22','1','N');?></td>
                            <td> <?= nilai('a23','','N');?></td>
                            <td> <?= nilai('a24','','N');?></td>
                            <td> <?= nilai('a25','','N');?></td>
                            <td> <?= nilai('a26','','N');?></td>
                        </tr>
                        <tr>
                            <td> C03</td>
                            <td> <?= nilai('a31','','Y');?></td>
                            <td> <?= nilai('a32','','Y');?></td>
                            <td> <?= nilai('a33','1','N');?></td>
                            <td> <?= nilai('a34','','N');?></td>
                            <td> <?= nilai('a35','','N');?></td>
                            <td> <?= nilai('a36','','N');?></td>
                        </tr>
                        <tr>
                            <td> C04</td>
                            <td> <?= nilai('a41','','Y');?></td>
                            <td> <?= nilai('a42','','Y');?></td>
                            <td> <?= nilai('a43','','Y');?></td>
                            <td> <?= nilai('a44','1','N');?></td>
                            <td> <?= nilai('a45','','N');?></td>
                            <td> <?= nilai('a46','','N');?></td>
                        </tr>
                        <tr>
                            <td> C05</td>
                            <td> <?= nilai('a51','','Y');?></td>
                            <td> <?= nilai('a52','','Y');?></td>
                            <td> <?= nilai('a53','','Y');?></td>
                            <td> <?= nilai('a54','','Y');?></td>
                            <td> <?= nilai('a55','1','N');?></td>
                            <td> <?= nilai('a56','','N');?></td>
                        </tr>
                        <tr>
                            <td> C06</td>
                            <td> <?= nilai('a61','','Y');?></td>
                            <td> <?= nilai('a62','','Y');?></td>
                            <td> <?= nilai('a63','','Y');?></td>
                            <td> <?= nilai('a64','','Y');?></td>
                            <td> <?= nilai('a65','','Y');?></td>
                            <td> <?= nilai('a66','1','N');?></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="col-md-4">
                <?= button('Submit','btn btn-success','Proses');?>
            </div>
            </form>
        </div>
    <?php
    break;
    case "normalisasi":
    $query ="SELECT * FROM nilai_kriteria WHERE id='1'";
    $eksekusi = mysql_query($query);
    $r=mysql_fetch_assoc($eksekusi);
    $total = '$total';
    for($i=1; $i<=6; $i++){
        $total.$j = 0;
        for($j=1; $j<=6; $j++){
            //$bb =$i.$j;
            //$h = $r[$bb];
         $total.$j = $total.$j + $h;
        }
        var_export($total.$j);
    }
    break;
}