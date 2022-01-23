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

            <a class="navbar-brand" href="?page=utama">PT Bakrie Sumatera Plantations Tbk Kisaran</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                <li><a href="?page=utama">Home</a></li>                              
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Master Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=datagaji&actions=tampil">Data Gaji</a></li>
                        <li><a href="?page=datakaryawan&actions=tampil">Data Karyawan</a></li>
                        <li><a href="?page=user&actions=tampil">Data User</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=datagaji&actions=report">Laporan Data Gaji</a></li>
			<li><a href="?page=datakaryawan&actions=report">Laporan Data Karyawan</a></li>
                    </ul>
                </li>
                

                    <li><a href="?page=sejarah&actions=tampil">Sejarah</a></li>
                    <li><a href="?page=kontak&actions=tampil">Contact</a></li>

                <?php } elseif (isset($_SESSION['level']) && $_SESSION['level']==2) { ?>
                    <li><a href="?page=slip&actions=tampil">Slip Gaji</a></li>                             
              <?php } ?>


                     <?php if (isset($_SESSION['level'])=='') { ?>
                         <li><a href="?page=login&actions=tampil">Login</a></li>
                     <?php } ?>

                    <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="logout.php">Logout</a></li>
                    
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
