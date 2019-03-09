<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="fa fa-2x fa-list"></i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Daftar Pengembalian Perpustakaan</h4>
                    <div class="table-responsive">
                        <table class="table" id="grid-kembali">
                            <thead class="text-primary">
                                <th>ID</th>
                                <th>Nama Peminjam</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Judul Buku</th>
                                <th>Nama Petugas</th>
                                <th>Sisa Hari</th>
                            </thead>
                            <tbody>
                                
                                <?php 
                                $qrkembali = mysqli_query($koneksi, "SELECT * FROM peminjaman");
                                while($datakembali = mysqli_fetch_array($qrkembali)) {
                                $awal = substr(date('Y-m-d'), 8,2) - substr($datakembali['tgl_kembali'], 8,2);
                                ?>
                                <tr>
                                <td><?php echo $datakembali['id_peminjaman']; ?></td>
                                <td><?php echo $datakembali['nama_pengunjung']; ?></td>
                                <td><?php echo $datakembali['tgl_pinjam']; ?></td>
                                <td><?php echo $datakembali['tgl_kembali']; ?></td>
                                <td><?php echo $datakembali['judul']; ?></td>
                                <td><?php echo $datakembali['nama_petugas']; ?></td>
                                <td><?php echo "<b>".$awal." Hari</b>"; ?></td>
                                </tr>
                                <?php
                                } 
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>