<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="fa fa-2x fa-list"></i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Daftar Peminjaman Perpustakaan</h4>
                    <div class="table-responsive">
                        <table class="table" id="grid-pinjam">
                            <thead class="text-primary">
                                <th>ID</th>
                                <th>Nama Peminjam</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Judul Buku</th>
                                <th>Nama Petugas</th>
                                <th class="text-right">Aksi</th>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="pinjamModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title">Edit Peminjaman</h4>
                </div>
                <div class="modal-body">
                    <form id="formPinjamEdit">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group label-floating">
                                <label class="label-control">ID Peminjaman</label>
                                <input type="text" id="id" name="id" class="form-control" readonly>
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
                                <input type="date" id="tglkembali" name="tglkembali" class="form-control">
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-simple" onclick="doUpdatePinjam()">Edit Pengunjung</button>
                    <button type="button" class="btn btn-danger btn-simple keluar" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>