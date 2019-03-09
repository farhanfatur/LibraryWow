<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="fa fa-2x fa-list"></i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Daftar Buku Perpustakaan</h4>
                    <!-- <a href="modul/md_buku/action/export.php" class="btn btn-success btn-sm"><i class="fa fa-arrow-up"></i> Export</a> -->
                    <div class="table-responsive">
                        <table class="table" id="grid-book">
                            <thead class="text-primary">
                                <th>No</th>
                                <th>Judul</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th>Jenis Buku</th>
                                <th>Stok</th>
                                <th>Tahun Terbit</th>
                                <th>Jumlah Halaman</th>
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

<div class="modal fade" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><span class="title"></span> Buku</h4>
                </div>
                <div class="modal-body">
                    <form id="formBookEdit">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group label-floating">
                                <label class="label-control">ID Buku</label>
                                <input type="text" id="id" name="id" class="form-control" readonly required>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group label-floating">
                                <label class="label-control">Nama Buku</label>
                                <input type="text" id="nama" name="judul" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group label-floating">
                                <label class="label-control">Pengarang</label>
                                <input type="text" id="pengarang" name="pengarang" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group label-floating">
                                <label class="label-control">Penerbit</label>
                                <input type="text" id="penerbit" name="penerbit" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group label-floating">
                                <label class="label-control">Jenis Buku</label>
                                <input type="text" id="jenis_buku" name="jenis_buku" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group label-floating">
                                <label class="label-control">Stok</label>
                                <input type="text" id="stok" name="stok" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group label-floating">
                                <label class="label-control">Tahun Terbit</label>
                                <input type="text" id="tahun_terbit" name="tahun_terbit" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group label-floating">
                                <label class="label-control">Jumlah Halaman</label>
                                <input type="text" id="jml_halaman" name="jml_halaman" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-simple" onclick="doUpdateBook()"><span id="textSubmitBook"></span> Buku</button>
                    <button type="button" class="btn btn-danger btn-simple keluar" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>