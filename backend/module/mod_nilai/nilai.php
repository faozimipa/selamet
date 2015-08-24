<?php

$act="module/mod_nilai/act_nilai.php";
date_default_timezone_set("Asia/Jakarta");

switch($_GET['act'])
{
    case "list":
        $query_belum = "SELECT * from guru WHERE nip NOT IN (SELECT nip  from nilai_guru)";
        $eksekusi_belum = mysql_query($query_belum);

        $query_sudah = "SELECT * from guru WHERE nip IN (SELECT nip  from nilai_guru)";
        $eksekusi_sudah = mysql_query($query_sudah);

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

                                  echo "<td>

                                      <a href='/../backend/media.php?module=nilai&act=input&id=$baris[nip]'><i class='glyphicon glyphicon-screenshot'></i> Input</a>

                                  </td>";
                                  echo "</tr>";
                              }
                              ?>
                              </tbody>
                          </table>
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

                              echo "<td>

                                      <a href='/../backend/media.php?module=nilai&act=edit&id=$baris[nip]'><i class='glyphicon glyphicon-edit'></i> Edit</a>

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
        $id =$_GET['id'];
        $query = "SELECT * FROM guru WHERE nip='$id'";
        $eksekusi = mysql_query($query);
        $hasil = mysql_fetch_assoc($eksekusi);
        ?>
        <div class="row">
            <form action="<?= $act; ?>?module=nilai&act=input" method="POST">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" readonly="TRUE" class="form-control" name="nip" placeholder="NIP" value="<?= $hasil['nip']; ?>" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" readonly="TRUE" class="form-control" name="nama" placeholder="Nama" value="<?= $hasil['nama']; ?>" required="required" />
                    </div>
                <div class="form-group">
                    <label for="kriteria_satu">C01</label>
                        <select id="subject" name="kriteria_satu" class="form-control" required="required">
                            <option value="" selected="">Pilih Kriteria:</option>
                            <option value="5">Sangat Baik</option>
                            <option value="4">Baik</option>
                            <option value="3">Cukup</option>
                            <option value="2">Kurang</option>
                            <option value="1">Sangat Kurang</option>
                        </select>
                </div>

                    <div class="form-group">
                        <label for="kriteria_dua">C02</label>
                        <select id="subject" name="kriteria_dua" class="form-control" required="required">
                            <option value="" selected="">Pilih Kriteria:</option>
                            <option value="5">Sangat Baik</option>
                            <option value="4">Baik</option>
                            <option value="3">Cukup</option>
                            <option value="2">Kurang</option>
                            <option value="1">Sangat Kurang</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="kriteria_tiga">C03</label>
                        <select id="subject" name="kriteria_tiga" class="form-control" required="required">
                            <option value="" selected="">Pilih Kriteria:</option>
                            <option value="5">Sangat Baik</option>
                            <option value="4">Baik</option>
                            <option value="3">Cukup</option>
                            <option value="2">Kurang</option>
                            <option value="1">Sangat Kurang</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="kriteria_empat">C04</label>
                        <select id="subject" name="kriteria_empat" class="form-control" required="required">
                            <option value="" selected="">Pilih Kriteria:</option>
                            <option value="5">Sangat Baik</option>
                            <option value="4">Baik</option>
                            <option value="3">Cukup</option>
                            <option value="2">Kurang</option>
                            <option value="1">Sangat Kurang</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="kriteria_lima">C05</label>
                        <select id="subject" name="kriteria_lima" class="form-control" required="required">
                            <option value="" selected="">Pilih Kriteria:</option>
                            <option value="5">Sangat Baik</option>
                            <option value="4">Baik</option>
                            <option value="3">Cukup</option>
                            <option value="2">Kurang</option>
                            <option value="1">Sangat Kurang</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="kriteria_enam">C06</label>
                        <select id="subject" name="kriteria_enam" class="form-control" required="required">
                            <option value="" selected="">Pilih Kriteria:</option>
                            <option value="5">Sangat Baik</option>
                            <option value="4">Baik</option>
                            <option value="3">Cukup</option>
                            <option value="2">Kurang</option>
                            <option value="1">Sangat Kurang</option>
                        </select>
                    </div>
                    <input type=submit class="btn btn-success btn-block" value="Input Nilai">


                </div>

            </form>
        </div>

        <?php
    break;
}