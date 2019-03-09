<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form id="RangeValidation" class="form-horizontal formAddPinjam" action="modul/md_peminjaman/action/add.php" method="POST">
                    <div class="card-header card-header-text" data-background-color="rose">
                        <h4 class="card-title"><i class="fa fa-address-book"></i> Tambah Peminjaman Buku</h4>
                    </div>
                    <div class="card-content">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group label-floating">
                                <label class="label-control">ID Peminjaman</label>
                                <input type="text" id="id" name="id" class="form-control" value="<?php echo autonumber('peminjaman', 'id_peminjaman', '3', 'PN'); ?>" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group label-floating">
                                <label class="label-control">Tanggal Peminjaman</label>
                                <input type="date" id="tglpinjam" name="tglpinjam" class="form-control" readonly value="<?php echo date('Y-m-d'); ?>">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group label-floating">
                                <label class="label-control">Tanggal Pengembalian</label>
                                <input type="date" id="tglpinjam" name="tglkembali" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group label-floating">
                                <label class="label-control">ID Buku</label>
                                <?php 
                                include "lib/database.php";
                                $qr = mysqli_query($koneksi, "SELECT * FROM buku");
                                $jsArray = "let namaBuku = new Array();\n";
                                 ?>
                                <select name="id_buku" onchange="changeValueBook(this.value)" class="form-control" required>
                                    <option>- Pilih ID Buku -</option>
                                    <?php 
                                    while($data = mysqli_fetch_array($qr)) {
                                     ?>
                                    <option value="<?=$data['id_buku'];?>" data-judul="<?php echo $data['judul']; ?>"><?=$data['id_buku'];?> - <?=$data['judul'];?></option>
                                    <?php 
                                    $jsArray .= "namaBuku['".$data['id_buku']."'] = {name : '".addslashes($data['judul'])."'};\n";
                                    }
                                     ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group label-floating">
                                <label class="label-control">Judul Buku</label>
                                <input type="text" id="judul" name="judul" class="form-control" required readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group label-floating">
                                <label class="label-control">ID Pengunjung/Peminjam</label>
                                <?php 
                                $qrpengunjung = mysqli_query($koneksi, "SELECT * FROM pengunjung");
                                $jsArrayPengunjung = "let namaPengunjung = new Array();\n";
                                 ?>
                                <select name="id_pengunjung" onchange="changeValuePengunjung(this.value)" class="form-control" required>
                                <option>- Pilih ID Pengunjung -</option>
                                <?php 
                                while($datapengunjung = mysqli_fetch_array($qrpengunjung)) {
                                 ?>
                                    <option value="<?php echo $datapengunjung['id_pengunjung']; ?>"><?php echo $datapengunjung['id_pengunjung']; ?> - <?php echo $datapengunjung['nama_pengunjung']; ?></option>
                                <?php 
                                $jsArrayPengunjung .= "namaPengunjung['".$datapengunjung['id_pengunjung']."'] = {name : '".addslashes($datapengunjung['nama_pengunjung'])."'};\n";
                                }
                                 ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group label-floating">
                                <label class="label-control">Nama Peminjam</label>
                                <input type="text" id="namapeminjam" name="namapeminjam" class="form-control" required readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group label-floating">
                                <label class="label-control">ID Petugas</label>
                                <?php 
                                $qrpetugas = mysqli_query($koneksi, "SELECT * FROM petugas");
                                $jsArrayPetugas = "let namaPetugas = new Array();\n";
                                 ?>
                                <select name="id_petugas" onchange="changeValuePetugas(this.value)" class="form-control" required>
                                <option>- Pilih ID Petugas -</option>
                                <?php 
                                while ($datapetugas = mysqli_fetch_array($qrpetugas)) {
                                 ?>
                                    <option value="<?php echo $datapetugas['id_petugas']; ?>"><?php echo $datapetugas['id_petugas']; ?> - <?php echo $datapetugas['nama_petugas']; ?></option>
                                <?php
                                $jsArrayPetugas .= "namaPetugas['".$datapetugas['id_petugas']."'] = {name : '".$datapetugas['nama_petugas']."'};\n"; 
                                }
                                 ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group label-floating">
                                <label class="label-control">Nama Petugas</label>
                                <input type="text" id="namapetugas" name="namapetugas" class="form-control" required readonly>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="button" class="btn btn-rose btn-fill" id="doAddPinjam"><i class="fa fa-plus"></i> Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>