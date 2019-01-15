<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top"
    <div class="container">
        <div class="navbar-header" style="background: red">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="?page=utama">Sistem Informasi Penginputan Data Pasien di RSUD HAMS Kisaran</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="?page=utama" style="background: yellow"><span <button type="button">Home</span>
                </li>
                <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                <li class="dropdown">
                    <ul class="dropdown-menu">
                        <li><a href="?page=arsip&actions=tampil">Arsip</a></li>
                        <li><a href="?page=peminjaman&actions=tampil">Peminjaman</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="background: green">Laporan <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=arsip&actions=report">Laporan Pasien</a></li>
						            <li><a href="?page=peminjaman&actions=report">Rawat Inap</a></li>
                    </ul>
                </li>
                <li><a href="?page=user&actions=tampil" style="background: blue"><span <button type="button"></button>User</span></a></li>


                <?php } ?>


                <li><a href="?page=about&actions=tampil" style="background: grey">About</a></li>
                <li><a href="?page=kontak&actions=tampil" style="background: black">Contact</a></li>

                    <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="logout.php" style="background: red">Logout</a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
