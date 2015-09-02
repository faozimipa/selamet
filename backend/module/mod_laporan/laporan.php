<?php
$act="module/mod_laporan/act_laporan.php";
date_default_timezone_set("Asia/Jakarta");

$cek_publikasi = mysql_query("SELECT valid, lihat  from nilai_kriteria where id=1");
$hasil_publikasi =mysql_fetch_array($cek_publikasi);

switch($_GET['act'])
{
    case 'nilai':
        $total = mysql_query("select sum(na) as jumlah from nilai_guru");
        $nilai_total = mysql_fetch_array($total);
        $nilai_guru = " select n.na, n.nip,g.nama  from nilai_guru n, guru g WHERE n.nip=g.nip ORDER BY na DESC ";
        $eksekusi_nilai = mysql_query($nilai_guru);
        ?>
        <table class="table table-responsive">
            <thead>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Nilai</th>
                  <th>Peringkat</th>
            </thead>
            <tbody>
            <?php
        $NO=1;
        while($h = mysql_fetch_array($eksekusi_nilai)){
            echo "<tr>";
            echo "<td> $h[nip] </td>";
            echo "<td> $h[nama] </td>";
            echo "<td>"; ?> <?= bulat($h['na']/$nilai_total['jumlah']); ?><?php echo "</td>";
            echo "<td>$NO</td>";
            echo "</tr>";
            $NO ++;
        }
            ?>
            </tbody>
        </table>

    <?php


        if ($hasil_publikasi['valid']=='Y'){
            echo "<blink><h4> Data Sudah Valid</h4></blink>";
            if($_SESSION['level']<=1)
            {
                if ( $hasil_publikasi['lihat'] == 'Y' )
                {
                    clink($act . '?module=laporan&act=nonpublish', 'btn btn-warning', 'Sembunyikan Publikasi Hasil');
                } else
                {
                    echo "<marquee> <h3> Data belum di publikaiskan</h3></marquee>";
                    clink($act . '?module=laporan&act=publish', 'btn btn-success', 'Publikasi Hasil');

                }
            }

        }else{
            echo "<blink><h4> Data Tidak Valid</h4></blink>";
        }

    break;

    case 'pengumuman':
        if($hasil_publikasi['lihat']=='Y'){
            $total = mysql_query("select sum(na) as jumlah from nilai_guru");
            $nilai_total = mysql_fetch_array($total);

            $nilai_guru = " select n.na, n.nip,g.nama  from nilai_guru n, guru g WHERE n.nip=g.nip ORDER BY na DESC ";
            $eksekusi_nilai = mysql_query($nilai_guru);
            ?>
            <h2> HASIL PENILAIAN GURU TELADAN </h2>
            <table class="table table-responsive">
                <thead>
                <th>NIP</th>
                <th>Nama</th>
                <th>Nilai</th>
                <th>Peringkat</th>
                </thead>
                <tbody>
                <?php
                $NO=1;
                while($h = mysql_fetch_array($eksekusi_nilai)){
                    echo "<tr>";
                    echo "<td> $h[nip] </td>";
                    echo "<td> $h[nama] </td>";
                    echo "<td>"; ?> <?= bulat($h['na']/$nilai_total['jumlah']); ?><?php echo "</td>";
                    echo "<td>$NO</td>";
                    echo "</tr>";
                    $NO ++;
                }
                ?>
                </tbody>
            </table>
            <br>


                <div class="alert alert-warning" role="alert">
                    <div class="label label-warning">
                        NB :
                    </div>
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <span class="sr-only">Error:</span>
                    <p>Hasil ini bersifat Final dan tidak bisa diganggu gugat.</p>
                </div>



            <?php
        }else{
            ?>
            <div class="alert alert-danger" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Error:</span>
            Maaf proses penilaian guru Teladan belum selesai.
            </div>
        <?php
        }
        break;
}