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
            <a class="navbar-brand" href="#">Website aja</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php
                session_start();
                if($_SESSION['level'] < 3 ){ ?>
                        <li><a href="dashboard.html">Home</a></li>
                        <li><a href="profile.html">Profile</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Guru <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="daftar-guru.html">Daftar Guru</a></li>
                                <li><a href="input-guru.html">Input Guru</a></li>

                                <li class="divider"></li>
                                <li class="dropdown-header">Nilai Guru</li>
                                <li><a href="daftar-nilai-guru.html">Daftar Nilai Guru</a></li>

                            </ul>
                        </li>

                        <li><a href="home.html">Kriteria</a></li>
                        <li><a href="home.html">Laporan</a></li>

                <?php    } ?>

                <li><a href="/../informasi.html">Informasi</a></li>
                <li><a href="/../bantuan.html">Bantuan</a></li>
                <li><a href="logout.php">Keluar</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
