<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="assets/img/sidebar-1.jpg">
            <div class="logo">
                <a href="?module=beranda" class="simple-text logo-mini">
                    P
                </a>
                <a href="?module=beranda" class="simple-text logo-normal">
                    Perpustakaan
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <?php 
                            if($_SESSION['position'] == 'kruhp') {
                        ?>
                        <img src="assets/img/faces/github.png" />
                        <?php 
                            }else {
                        ?>
                        <img src="assets/img/faces/avatar.jpg" />
                        <?php
                            }
                         ?>
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span>
                                <?=$_SESSION['name_ses']; ?>
                                <b class="caret"></b>
                            </span>
                        </a>
                        <div class="clearfix"></div>
                        <!-- <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini"> MP </span>
                                        <span class="sidebar-normal"> My Profile </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini"> EP </span>
                                        <span class="sidebar-normal"> Edit Profile </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini"> S </span>
                                        <span class="sidebar-normal"> Settings </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
    -->                 </div>
                </div>
                <ul class="nav">
                    <li class="active">
                        <a href="?module=beranda">
                            <i class="fa fa-3x fa-dashboard"></i>
                            <p> Dashboard </p>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#pagesExamples">
                            <i class="fa fa-3x fa-book"></i>
                            <p> Buku
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="pagesExamples" class="active">
                            <ul class="nav">
                                <li>
                                    <a href="?module=buku">
                                        <span class="sidebar-mini"> LB </span>
                                        <span class="sidebar-normal"> List Buku </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=tambah-buku">
                                        <span class="sidebar-mini"> TB </span>
                                        <span class="sidebar-normal"> Tambah Buku </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#pagesExamples1">
                            <i class="fa fa-3x fa-bookmark"></i>
                            <p> Barang
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="pagesExamples1">
                            <ul class="nav">
                                <li>
                                    <a href="?module=barang">
                                        <span class="sidebar-mini"> LB </span>
                                        <span class="sidebar-normal"> List Barang </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=tambah-barang">
                                        <span class="sidebar-mini"> TB </span>
                                        <span class="sidebar-normal"> Tambah Barang </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#pagesExamples2">
                            <i class="fa fa-3x fa-users"></i>
                            <p> Pengunjung
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="pagesExamples2">
                            <ul class="nav">
                                <li>
                                    <a href="?module=pengunjung">
                                        <span class="sidebar-mini"> LP </span>
                                        <span class="sidebar-normal"> List Pengunjung </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=tambah-pengunjung">
                                        <span class="sidebar-mini"> TP </span>
                                        <span class="sidebar-normal"> Tambah Pengunjung </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#pagesExamples4">
                            <i class="fa fa-3x fa-step-backward"></i>
                            <p> Peminjaman
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="pagesExamples4">
                            <ul class="nav">
                                <li>
                                    <a href="?module=pinjambuku">
                                        <span class="sidebar-mini"> LPB </span>
                                        <span class="sidebar-normal"> List Peminjaman Buku </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=kembalibuku">
                                        <span class="sidebar-mini"> LPNB </span>
                                        <span class="sidebar-normal"> List Pengembalian Buku </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=tambah-pinjambuku">
                                        <span class="sidebar-mini"> TP </span>
                                        <span class="sidebar-normal"> Tambah Peminjaman </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <?php 
                    if($_SESSION['position'] == 'kruhp'){
                    ?>
                    <li>
                        <a data-toggle="collapse" href="#pagesExamples5">
                            <i class="fa fa-3x fa-users"></i>
                            <p> Petugas
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="pagesExamples5">
                            <ul class="nav">
                                <li>
                                    <a href="?module=petugas">
                                        <span class="sidebar-mini"> LP </span>
                                        <span class="sidebar-normal"> List Petugas </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=tambah-petugas">
                                        <span class="sidebar-mini"> TP </span>
                                        <span class="sidebar-normal"> Tambah Petugas </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <?php
                    } 
                    ?>
                    <?php 
                    if($_SESSION['position'] == "kruhp") { 
                     ?>
                    <li>
                        <a href="#">
                            <i class="fa fa-3x fa-print"></i>
                            <p>Laporan</p>
                        </a>
                    </li>
                    <?php 
                    }
                    ?>
                </ul>
            </div>
        </div>