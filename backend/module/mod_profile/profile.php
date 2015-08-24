<?php
$act="module/mod_profile/act_profile.php";

$id = $_SESSION['username'];
$query = "SELECT * FROM guru,user WHERE guru.nip='$id' AND user.username='$id'";
$eksekusi = mysql_query($query);
$hasil = mysql_fetch_assoc($eksekusi);


?>
<!-- Tabs Style 2 -->
<div class="col-sm-12">
    <h3 class="header-title">Daftar Nilai Guru</h3>
    <span class="line"></span>
    <div class="tabs-style-2">
        <ul id="myTab2" class="nav nav-pills primary-border-bottom">
            <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
            <li><a href="#editpassword" data-toggle="tab">Edit Password</a></li>
        </ul>
        <div id="myTabContent2" class="tab-content">
            <div class="tab-pane fade in active" id="Profile">
                <div class="left-image-text">

                        <?php var_export($hasil); ?>
                </div>
            </div>
            <div class="tab-pane fade" id="editpassword">
                <div class="post-widget large-widget">
                    <?php echo "edit password di sini"; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Tabs Style 2 -->
<?php


 