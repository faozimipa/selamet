<?php

$act="module/user/act_user.php";
date_default_timezone_set("Asia/Jakarta");

switch($_GET['act']){
    case "index":
        //mengambil data dari tabel user
        $query = "Select * from user";
        // mengeksekusi perintah pengambilan
        $eksekusi = mysql_query($query);

        //menampilkan hasil eksekusi
        ?>
        <a href='?module=user&act=add'>
            <button type="button" class="btn btn-info"> Add new User </button>
        </a>

        <table class="table table-responsive">
            <thead>
                <th>Nama</th>
                <th>Username</th>
				            <th>Jenis Kelamin </th>
                <th>Action</th>
            </thead>
            <tbody>
        <?php
        while($baris = mysql_fetch_assoc($eksekusi))
        {
           echo "<tr>";
           echo "<td> $baris[nama] </td>";
           echo "<td> $baris[username] </td>";
		   echo "<td> $baris[jenis_kelamin]</td>";
           echo "<td>

                    <a href='?module=user&act=view&id=$baris[id]'><i class='glyphicon glyphicon-eye-open'></i> </a>
                    <a href='?module=user&act=edit&id=$baris[id]'><i class='glyphicon glyphicon-edit'></i> </a>
                    <a href='$act?module=user&act=delete&id=$baris[id]'><i class='glyphicon glyphicon-remove'></i> </a>

                 </td>";
           echo "</tr>";
        }
         ?>
            </tbody>
            </table>
        <?php
    break;

    case "view":
        $id =$_GET['id'];
        $eksekusi = mysql_query("select * from user where id=$id");
        while($baris = mysql_fetch_array($eksekusi))
        {
            ?>
            <div class="row">
                <div class="col-md-8">

                    <div class="panel panel-primary ">
                        <div class="panel-heading">
                            <img class="img-responsive img-circle" src="" alt=""/>
                        </div>
                        <div class="panel-body">
                            Nama : <?= $baris['nama']; ?> <br>
							                     Jenis Kelamin : <?php jk($baris['jenis_kelamin']); ?><br>
                            Username : <?= $baris['username']; ?> <br>
                            Asal : <?= $baris['asal']; ?> <br>
                        </div>
                    </div>
                </div>
                <a href='?module=user&act=index'>
                    <button type="button" class="btn btn-info"> List User </button>
                </a>
            </div>

            <?php
        }

        break;
    case "add":
        ?>
        <div class="row">
            <div class="col-md-8">
                <form action="<?= $act; ?>?module=user&act=input" method="POST">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan nama Anda" required="required" />
                    </div>
					
					<div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select id="subject" name="jenis_kelamin" class="form-control" required="required">
                            <option value="" selected="">Jenis Kelamin:</option>
                            <option value="L">Laki Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Masukan username Baru" required="required" />
                    </div>

                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="name">Asal</label>
                        <input type="text" class="form-control" name="asal" placeholder="Masukan Asal Alamat Anda" required="required" />
                    </div>

                    <input type=submit class="btn btn-success btn-block" value="Input">

                </form>
            </div>
        </div>

        <?php
    break;


    case "edit":
        $id =$_GET['id'];
        $eksekusi = mysql_query("select * from user where id=$id");
        while($baris = mysql_fetch_array($eksekusi))
        {
            ?>
            <div class="row">
                <div class="col-md-8">
                    <form action="<?= $act; ?>?module=user&act=save" method="POST">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?= $baris['nama']; ?>"
                                   required="required"/>
                        </div>
						
						<div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select id="subject" name="jenis_kelamin" class="form-control" required="required">
                            <?php if ($baris['jenis_kelamin']=='L'){ ?>								
								<option value="" >Jenis Kelamin:</option>
								<option value="L" selected="true">Laki Laki</option>
								<option value="P">Perempuan</option>
							<?php }else{ ?>
								<option value="" >Jenis Kelamin:</option>
								<option value="L" >Laki Laki</option>
								<option value="P" selected="true">Perempuan</option>
							<?php }?>
                        </select>
                    </div>

                        <div class="form-group">
                            <label for="name">Username</label>
                            <input type="text" class="form-control" name="username" value="<?= $baris['username']; ?>"
                                   required="required"/>
                        </div>


                        <div class="form-group">
                            <label for="name">Asal</label>
                            <input type="text" class="form-control" name="asal" value="<?= $baris['asal']; ?>" required="required"/>
                        </div>
                        <input type="hidden" name="id" value="<?= $baris['id']; ?>">
                        <input type=submit class="btn btn-warning btn-block" value="Update">

                    </form>
                </div>
            </div>

        <?php
        }
    break;

}