<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= $alamat_web; ?>"><?= $branding; ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php
                session_start();
                $level = $_SESSION['level'];
                if($level <= 2 ){ ?>
                        <li><a href="dashboard.html">Home</a></li>
                        <li><a href="profile.html">Profile</a></li>
                        <?php if($level <= 2){ ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Guru <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <?php if($level == 0){ ?>
                                <li><a href="daftar-guru.html">Daftar Guru</a></li>
                                <li><a href="input-guru.html">Input Guru</a></li>
                                <?php } ?>

                                <li class="divider"></li>
                                <li class="dropdown-header">Nilai Guru</li>
                                <li><a href="daftar-nilai-guru.html">Daftar Nilai Guru</a></li>

                            </ul>
                        </li>
                            <?php if($level == 0){ ?>
                                <li><a href="input-kriteria.html">Kriteria</a></li>
                            <?php } ?>

                       <?php } ?>
                        <li><a href="hasil-penilaian.html">Laporan</a></li>

                <?php    } elseif($_SESSION >2) {?>
                <li><a href="dashboard.html">Home</a></li>
                <li><a href="profile.html">Profile</a></li>
                <?php } ?>
                <li><a href="pengumuman-hasil.html">Pengumuman Hasil</a></li>
                <li><a href="logout.php">Keluar</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
