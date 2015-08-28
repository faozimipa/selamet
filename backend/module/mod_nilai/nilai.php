<?php

$act="module/mod_nilai/act_nilai.php";
date_default_timezone_set("Asia/Jakarta");

switch($_GET['act'])
{
    case "list":
        $query_belum = "SELECT * from guru WHERE jabatan='2' AND nip NOT IN (SELECT nip  from nilai_guru)";
        $eksekusi_belum = mysql_query($query_belum);
        $jumlah_belum = mysql_num_rows($eksekusi_belum);

        $query_sudah = "SELECT * from guru WHERE jabatan='2' AND nip IN (SELECT nip  from nilai_guru)";
        $eksekusi_sudah = mysql_query($query_sudah);
        $jumlah_sudah = mysql_num_rows($eksekusi_sudah);

?>
        <!-- Tabs Style 2 -->
              <div class="col-sm-12">
               <h3 class="header-title">Daftar Nilai Guru</h3>
               <span class="line"></span>
               <div class="tabs-style-2">
                <ul id="myTab2" class="nav nav-pills primary-border-bottom">
                     <li class="active"><a href="#belum" data-toggle="tab">Belum Input</a></li>
                     <li><a href="#sudah" data-toggle="tab">Sudah Input</a></li>

                </ul>
                <div id="myTabContent2" class="tab-content">
                 <div class="tab-pane fade in active" id="belum">
                      <div class="left-image-text">
                         <?php if ($jumlah_belum == 0){
                             ?>
                          <div class="alert alert-danger" role="alert">
                              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                              <span class="sr-only"></span>
                              Semua Nilai Guru Telah diInputkan!!!
                          </div>
                             <?php
                         }else{ ?>
                          <table class="table table-responsive">
                              <thead>
                                  <th>NIP</th>
                                  <th>Nama</th>
                                  <th>Aksi</th>
                              </thead>
                              <tbody>
                             <?php
                             while($baris = mysql_fetch_assoc($eksekusi_belum))
                              {
                              echo "<tr>";
                                  echo "<td> $baris[nip] </td>";
                                  echo "<td> $baris[nama] </td>";
                                    $id = en($baris['nip']);
                                  echo "<td>
                                      <a href='input-nilai-guru-$id-ini.html'><i class='glyphicon glyphicon-screenshot'></i> Input</a>
                                  </td>";
                                  echo "</tr>";
                              }
                              ?>
                              </tbody>
                          </table>
                         <?php } ?>
                      </div>
                 </div>
                 <div class="tab-pane fade" id="sudah">
                  <div class="post-widget large-widget">
                      <table class="table table-responsive">
                          <thead>
                          <th>NIP</th>
                          <th>Nama</th>
                          <th>Aksi</th>
                          </thead>
                          <tbody>
                          <?php
                          while($baris = mysql_fetch_assoc($eksekusi_sudah))
                          {
                              echo "<tr>";
                              echo "<td> $baris[nip] </td>";
                              echo "<td> $baris[nama] </td>";
                                $id= en($baris['nip']);
                              echo "<td>
                                      <a href='edit-nilai-guru-$id-ini.html'><i class='glyphicon glyphicon-edit'></i> Edit</a>
                                  </td>";
                              echo "</tr>";
                          }
                          ?>
                          </tbody>
                      </table>

                  </div>
                 </div>
                </div>
               </div>
              </div>
		<!-- End of Tabs Style 2 -->
    <?php

    break;
    case "input":
        $id = des($_GET['id']);
        $query = "SELECT * FROM guru WHERE nip='$id' AND jabatan='2'";
        $eksekusi = mysql_query($query);
        $hasil = mysql_fetch_assoc($eksekusi);
        ?>
        <div class="row">
            <form action="<?= $act; ?>?module=nilai&act=input" method="POST">
                <div class="col-md-6">
                    <?= input('nip','NIP','text',$hasil['nip'],'Y','Y');?>
                    <?= input('nama','Nama','text',$hasil['nama'],'Y','Y');?>
                    <?= cnilai('kriteria_satu','C01','');?>
                    <?= cnilai('kriteria_dua','C02','');?>
                    <?= cnilai('kriteria_tiga','C03','');?>
                </div>

                <div class="col-md-6">
                    <?= cnilai('kriteria_empat','C04','');?>
                    <?= cnilai('kriteria_lima','C05','');?>
                    <?= cnilai('kriteria_enam','C06','');?>
                    <div class="col-md-4">
                        <?= button('submit','btn btn-success btn-block','Input Nilai'); ?>
                    </div>
                    <div class="col-md-4">
                        <?= button('reset','btn btn-warning btn-block','Batal'); ?>
                    </div>
                    <div class="col-md-4">
                        <?= clink('daftar-nilai-guru.html','btn btn-danger btn-block','Kembali'); ?>
                    </div>

                </div>

            </form>
        </div>

        <?php
    break;
    case 'edit':
        $id = des($_GET['id']);
        $query = "SELECT * FROM nilai_guru,guru WHERE guru.nip='$id' AND nilai_guru.nip='$id'";
        $eksekusi = mysql_query($query);
        $hasil = mysql_fetch_assoc($eksekusi);
        ?>
        <div class="row">
            <form action="<?= $act; ?>?module=nilai&act=save" method="POST">
                <div class="col-md-6">
                    <?= input('nip','NIP','text',$hasil['nip'],'Y','Y'); ?>
                    <?= input('nama','Nama','text',$hasil['nama'],'Y','Y'); ?>
                    <?= cnilai('kriteria_satu','C01',$hasil['kriteria_satu']);?>
                    <?= cnilai('kriteria_dua','C02',$hasil['kriteria_dua']);?>
                    <?= cnilai('kriteria_tiga','C03',$hasil['kriteria_tiga']);?>
                </div>
                <div class="col-md-6">
                    <?= cnilai('kriteria_empat','C04',$hasil['kriteria_empat']);?>
                    <?= cnilai('kriteria_lima','C05',$hasil['kriteria_lima']);?>
                    <?= cnilai('kriteria_enam','C06',$hasil['kriteria_enam']);?>
                    <div class="col-md-4">
                    <?= button('submit','btn btn-success btn-block','Update Nilai'); ?>
                    </div>
                    <div class="col-md-4">
                        <?= button('reset','btn btn-warning btn-block','Batal'); ?>
                    </div>
                    <div class="col-md-4">
                        <?= clink('daftar-nilai-guru.html','btn btn-danger btn-block','Kembali'); ?>
                    </div>
                </div>
            </form>
        </div>
<?php
    break;
}