<div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="fa fa-book"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Jumlah Buku</p>
                                    <h3 class="card-title"><?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM buku")); ?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> 1 Minggu Terakhir
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="rose">
                                    <i class="fa fa-step-backward"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Peminjaman Buku</p>
                                    <h3 class="card-title"><?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM peminjaman")); ?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> 1 Minggu Terakhir
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Jumlah Pengunjung</p>
                                    <h3 class="card-title"><?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM pengunjung")); ?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> 1 Minggu Terakhir
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="fa fa-bookmark"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Jumlah Barang</p>
                                    <h3 class="card-title"><?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM barang")); ?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                       <i class="fa fa-clock-o"></i> 1 Minggu Terakhir
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>